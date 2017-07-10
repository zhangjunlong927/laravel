<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    //指定表
    protected $table = 'test';

    //指定不使用时间戳
    public $timestamps = false;

}
