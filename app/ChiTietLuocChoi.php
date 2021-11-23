<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietLuocChoi extends Model
{
     protected $table ='chi_tiet_luot_choi';
    public function cauhoi(){
    	return $this->hasMany('App\CauHoi','cau_hoi_id','id');
    }
   	public function luotchoi(){
    	return $this->belongsTo('App\LuocChoi','luot_choi_id','id');
    }
}
