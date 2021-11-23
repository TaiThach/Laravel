<?php

use Illuminate\Database\Seeder;
use App\LuocChoi;
class ThemLuocChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LuocChoi::create([
           'nguoi_choi_id' => '1',
           'so_cau' => '5',
           'diem' => '2000'
       ]);
    }
}
