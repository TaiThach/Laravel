<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuocChoi extends Model
{
     protected $table ='luoc_choi';
    public function chitietluotchoi(){
    	return $this->belongsTo('App\LinhVuc','luot_choi_id','id');
    }
   	public function nguoichoi(){
    	return $this->hasMany('App\ChiTietLuocChoi','nguoi_choi_id','id');
    }
}
