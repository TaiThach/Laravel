<?php

use Illuminate\Database\Seeder;
use App\GoiCredit;
class GoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
       DB::table('goi_credit')->insert([
        	['ten_goi' => 'mua trả góp',
        	'credit'=>'12',
        	'so_tien'=>'100'
        	]
        ]);
    }
}
