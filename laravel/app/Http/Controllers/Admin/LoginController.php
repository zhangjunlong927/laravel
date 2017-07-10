<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\UserModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //登录
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            //获取用户填写的信息
            $data = $request->all();
            //设置验证码的 验证规则
            $rules = ['captcha' => 'required|captcha'];
            $message = [
                'captcha.captcha' => '验证码输入错误'
            ];
            $validator = Validator::make($data, $rules, $message);
            if ($validator->fails()) {
                //back() 表示返回上一界面
                return back()->withErrors($validator);
            } else {
                //验证码正确进行下面的验证
                $auth = Auth::guard('admin')->attempt(['name' => $data['name'], 'password' => $data['password']]);
                if ($auth) {
                    return redirect('/admin/index');
                } else {
                    return back()->withErrors('用户名或密码错误!');
                    //return view('admin.login')->with('errorMsg','用户名或者密码错误!')
                }
            }
        }
        //加载登录页面
        return view('admin.login');
    }

    //退出登录
    public function logout()
    {
        //调用认证方法
        Auth::guard('admin')->logout();
        return redirect('/login/login');
    }
}
