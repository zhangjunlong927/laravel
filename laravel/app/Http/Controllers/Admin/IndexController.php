<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    //加载后台主页
    public function index()
    {

        return view('admin.index');
    }

    //加载欢迎页
    public function welcome()
    {

        return view('admin.welcome');
    }
}
