<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class NguoiChoi extends Model
{
    use softDeletes;
    protected $table='nguoi_choi';
    public function luotchoi(){
    	return $this->belongsTo('App\LuocChoi','nguoi_choi_id','id');
    }
   	public function lichsumuacredit(){
    	return $this->hasMany('App\LichSuMuaCreDit','goi_credit_id','id');
    }
}
