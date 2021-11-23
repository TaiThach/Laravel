<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhapp;
use App\CauHinhDiemCauHoi;
use App\CauHinhTroGiup;
class CauHinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $dsCauHinhapp = CauHinhapp::all();
        return view('cau-hinh.danh-sach-app',compact('dsCauHinhapp'));
        
    }
    public function index2()
    {
        $dsCauHinhDiemCauHoi = CauHinhDiemCauHoi::all();
        return view('cau-hinh.danh-sach-diem-cau-hoi',compact('dsCauHinhDiemCauHoi'));
    }
    public function index3()
    {
        $dsCauHinhTroGiup = CauHinhTroGiup::all();
        return view('cau-hinh.danh-sach-tro-giup',compact('dsCauHinhTroGiup'));
    }
}
