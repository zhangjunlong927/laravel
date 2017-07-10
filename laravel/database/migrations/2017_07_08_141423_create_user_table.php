<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //定义user表的结构
        Schema::create('user', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name', 100);
            $table->string('password');
            $table->timestamps();//创建created_at 和 updated_at
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
