<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class GoiCredit extends Model
{
    use softDeletes;
    protected $table='goi_credit';
    public function lichsumuacredit(){
    	return $this->belongsTo('App\LichSuMuaCreDit','goi_credit_id','id');
    }
  
}
