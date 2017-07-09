<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\UserModel;
use Illuminate\Support\Facades\Validator;

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
                'captcha.required' => '验证码必须填写',
                'captcha.captcha' => '验证码输入错误'
            ];
            $validator = Validator::make($data, $rules, $message);
            if ($validator->fails()) {
                //back() 表示返回上一界面
                return back()->withErrors($validator);
            } else {
                //验证码正确进行下面的验证
                //调用模型层验证
                $info = UserModel::login($data['name'], $data['password']);
                if ($info === true) {
                    return redirect()->to('/');
                } else {
                    return back()->with('msg', $info);
                }
            }
        }
        //加载登录页面
        return view('admin.login');
    }
}
