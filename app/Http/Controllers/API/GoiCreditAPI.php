<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditAPI extends Controller
{
    public function LayDanhSach()
    {
    	$dsgoiCredit = GoiCredit::all();
    	$result =[
    		'success'=>true,
    		'data'=>$dsgoiCredit
    	];
    	return response()->json($result);
    }
}
