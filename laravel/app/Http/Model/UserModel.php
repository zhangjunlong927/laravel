<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    //指定表
    protected $table = 'user';

    //验证用户登录信息
    public static function login($username, $password)
    {
        //验证规则
        $vali = Validator::make(
            [
                'name' => $username,
                'password' => $password
            ], [
                'name' => 'required',
                'password' => 'required'
            ]
        );

        if ($vali->fails()) {
            return $errorMeg = '未输入用户名或者密码';
        } else {
            $userInfo = UserModel::where('name', $username)->first();
            var_dump($userInfo);
            if ($userInfo['name']) {
                if (decrypt($userInfo['password']) == $password) {
                    return $errorMeg = true;
                    session(['username' => $username]);
                } else {
                    return $errorMeg = '密码错误';
                }
            } else {
                return $errorMeg = '用户名不存在';
            }
        }
    }
}