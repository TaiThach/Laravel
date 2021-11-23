<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class CauHoi extends Model
{
	use softDeletes;
    protected $table ='cau_hoi';
    public function linhvuc(){
    	return $this->belongsTo('App\LinhVuc','linh_vuc_id','id');
    }
   	public function chitietluotchoi(){
    	return $this->hasMany('App\ChiTietLuocChoi','luot_choi_id','id');
    }
}
