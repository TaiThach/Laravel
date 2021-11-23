<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use App\Http\Requests\NguoiChoiRequest;
class NguoiChoiController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //lấy danh sách câu hỏi
        $dsNguoiChoi = NguoiChoi::all();
        return view('nguoi-choi.danh-sach',compact('dsNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nguoi-choi.them-moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NguoiChoiRequest $request)
    {
        $nguoiChoi =new NguoiChoi;
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau = $request->mat_khau;
        $nguoiChoi->email = $request->email;
        $nguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
        $nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        $nguoiChoi->credit = $request->credit;

        $nguoiChoi->save(); 

        return redirect(route('nguoi-choi.danh-sach'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nguoiChoi = NguoiChoi::find($id);

        return view('nguoi-choi.sua-nguoi-choi',compact($nguoiChoi));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nguoiChoi = new NguoiChoi();
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->ten_dang_nhap = $request->input('ten_dang_nhap');
        $nguoiChoi->mat_khau = $request-> input('mat_khau');
        $nguoiChoi->email = $request-> input('email');
        $nguoiChoi->hinh_dai_dien = $request -> input('hinh_dai_dien');
        $nguoiChoi->diem_cao_nhat = $request -> input('diem_cao_nhat');
        $nguoiChoi->credit = $request -> input(' credit ');
        $nguoiChoi->save();
        return redirect(Route('nguoi-choi.danh-sach'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nguoiChoi = new NguoiChoi();
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->delete();
        return redirect(Route('nguoi-choi.danh-sach'));
    }
}
