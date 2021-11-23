<?php

use Illuminate\Database\Seeder;
use App\QuanTriVien;
class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       QuanTriVien::create([
           'ten_dang_nhap' => 'chubaohong',
           'mat_khau' => Hash::make('choithoi123'),
           'ho_ten' => 'Quan Tri 3'
       ]);
    }
}
