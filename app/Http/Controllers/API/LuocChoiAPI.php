<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use APP\LuocChoi;

class LuocChoiAPI extends Controller
{
    public function LayDanhSach()
    {
    	$dsluocChoi = LuocChoi::all();
    	$result =[
    		'success'=>true,
    		'data'=>$dsluocChoi
    	];
    	return response()->json($result);
    }
}
?>