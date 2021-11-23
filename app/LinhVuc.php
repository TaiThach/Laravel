<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class LinhVuc extends Model
{
    use softDeletes;
    protected $table='linh_vuc';
    protected $fillable = ['id','ten_linh_vuc'];
    protected $dates = ['deleted_at'];
    public function cauhoi()
    {
    	return $this->hasMany('App\CauHoi','linh_vuc_id','id');
    }
}
