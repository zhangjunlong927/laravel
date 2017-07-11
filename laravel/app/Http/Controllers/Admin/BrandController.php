<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //品牌展示页面
    public function brandLst()
    {

        return view('admin.brandLst');
    }
}
