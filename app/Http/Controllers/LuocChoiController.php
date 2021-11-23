<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuocChoi;
class LuocChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLuocChoi=LuocChoi::all();
        return view('luot-choi.danh-sach',compact('dsLuocChoi'));
    }
}
