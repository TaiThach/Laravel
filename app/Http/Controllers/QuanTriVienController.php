<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\QuanTriVien;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\DangNhapRequest;

class QuanTriVienController extends Controller
{		
		
    	public function dangNhap()
		{					
			return view('dang-nhap');
		}
		public function xldangNhap(DangNhapRequest $request)
		{	
			$ten_dang_nhap = $request->ten_dang_nhap;
			$mat_khau = $request->mat_khau;
			
			if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap ,'password' => $mat_khau])){
				return redirect()->route('trang-chu');
			}
			return redirect()->route('dang-nhap');
		}
		public function dangXuat()
		{
			Auth::logout();
			return redirect()->route('dang-nhap');
		}
		public function layThongTin()
		{
			return Auth::id();
		}
}
