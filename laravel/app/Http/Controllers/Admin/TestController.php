<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Model\TestModel;

class TestController extends Controller
{
    public function test()
    {
        $users = TestModel::get();
        print_r($users);
        //return view('add',['user'=>$user]);
    }


}
