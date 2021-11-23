<?php

use Illuminate\Database\Seeder;
use App\LinhVuc;
class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	['ten_linh_vuc'=>'lập trình'],
        	['ten_linh_vuc'=>'toán'],
        	['ten_linh_vuc'=>'địa lý']
        ];
        foreach ($data as $dt) {
        	LinhVuc::create($dt);
        }
    }
}
