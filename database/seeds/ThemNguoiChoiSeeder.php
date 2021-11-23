<?php

use Illuminate\Database\Seeder;
use App\NguoiChoi;
class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('nguoi_choi')->insert([
        	['ten_dang_nhap' => 'Thach Tai',
        	'mat_khau' => '12345645',
        	'email' => 'taithach28@gmail.com',
        	'hinh_dai_dien' => '',
        	'diem_cao_nhat' => '9999',
        	'credit' => '9999']
        ]);
    }
}
