<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChiTietLuocChoi;

class ChiTietLuocChoiAPI extends Controller
{
    public function LayDanhSach()
    {
    	$dschiTiet = ChiTietLuocChoi::all();
    	$result =[
    		'success'=>true,
    		'data'=>$dschiTiet
    	];
    	return response()->json($result);
    }
}
