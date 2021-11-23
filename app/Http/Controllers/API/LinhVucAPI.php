<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucAPI extends Controller
{
    public function LayDanhSach()
    {
    	$dslinhVuc = LinhVuc::all();
    	$result =[
    		'success'=>true,
    		'data'=>$dslinhVuc
    	];
    	return response()->json($result);
    }
}
?>