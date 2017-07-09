<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $arr = [
            'name' => '周星驰',
            'age' => '55',
            'addr' => 'hongkong'
        ];
        return view('index', ['arr' => $arr]);
    }

    public function form()
    {
        //接受数据
        $data = Input::get();
        //验证规则  名字不为空  年龄必须是数字
        $arr = [
            'name' => 'required',
            'age' => 'numeric'
        ];
        $message = [
            'name.required' => '名字不为空',
            'age.numeric' => '年龄必须是数字'
        ];
        $vali = Validator::make($data, $arr, $message);
        if ($vali->fails()) {
            return redirect('/index/add')->withErrors($vali);
        };
    }

}
