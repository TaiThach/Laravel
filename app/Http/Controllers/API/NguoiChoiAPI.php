<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use APP\NguoiChoi;

class NguoiChoiAPI extends Controller
{
     public function LayDanhSach()
    {
    	$dsnguoiChoi = NguoiChoi::all();
    	$result =[
    		'success'=>true,
    		'data'=>$dsnguoiChoi
    	];
    	return response()->json($result);
    }
}
