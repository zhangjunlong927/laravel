<?php

use Illuminate\Database\Seeder;

class brandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert([
            'brand_name' => '华为',
            'description' => '中国创造,征服世界!',
            'site_url' => 'http://www.huawei.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('brand')->insert([
            'brand_name' => '小米',
            'description' => '这是一个成功营销的案列-饥饿营销!',
            'site_url' => 'http://www.xiaomi.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
