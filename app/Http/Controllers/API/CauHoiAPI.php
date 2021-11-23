<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;

class CauHoiAPI extends Controller
{
    public function LayDanhSach()
    {
    	$dscauHoi = CauHoi::all();
    	$result =[
    		'success'=>true,
    		'data'=>$dscauHoi
    	];
    	return response()->json($result);
	}
	public function ID($id)
	{
		$ABC = CauHoi::where("linh_vuc_id",$id)->get();
    	$kq=[
			'data'=>$ABC
		];
		return response()->json($kq);
	}
}
