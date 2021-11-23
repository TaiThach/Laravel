<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuMuaCreDit extends Model
{
     protected $table ='lich_su_mua_credit';
     public function nguoichoi(){
    	return $this->hasMany('App\NguoiChoi','nguoi_choi_id','id');
    }
   	public function goicredit(){
    	return $this->belongsTo('App\GoiCredit','goi_credit_id','id');
    }
}
