<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
use App\Http\Requests\CauHoiRequest;
class CauHoiConTroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //lấy danh sách câu hỏi
        $dsCauHoi = CauHoi::all();
        return view('cau-hoi.danh-sach',compact('dsCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //lấy danh sách lĩnh vực
        $dsLinhVuc = LinhVuc::all();
         return view('cau-hoi.them-moi',compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CauHoiRequest $request)
    {
        $cauHoi=new CauHoi;
        $cauHoi->noi_dung=$request->noi_dung;       
        $cauHoi->linh_vuc_id=$request->linh_vuc;
        $cauHoi->phuong_an_a=$request->phuong_an_a;
        $cauHoi->phuong_an_b=$request->phuong_an_b;
        $cauHoi->phuong_an_c=$request->phuong_an_c;
        $cauHoi->phuong_an_d=$request->phuong_an_d;
        $cauHoi->dap_an=$request->dap_an;

        $cauHoi->save();

        return redirect(route('cau-hoi.danh-sach'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsLinhVuc = LinhVuc::all();
        $cauHoi = CauHoi::find($id);
        return view('cau-hoi.sua-cau-hoi', compact('dsLinhVuc'),compact('cauHoi'));
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
        $cauHoi = new CauHoi();
        $cauHoi = CauHoi::find($id);
        $cauHoi->noi_dung = $request->input('noi_dung');
        $cauHoi->linh_vuc_id = $request->input('linh_vuc_id');
        $cauHoi->phuong_an_a = $request->input('phuong_an_a');
        $cauHoi->phuong_an_b = $request->input('phuong_an_b');
        $cauHoi->phuong_an_c = $request->input('phuong_an_c');
        $cauHoi->phuong_an_d = $request->input('phuong_an_d');
        $cauHoi->dap_an = $request->input('dap_an');
        $cauHoi->save();
        return redirect(Route('cau-hoi.danh-sach'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHoi = new CauHoi();
        $cauHoi = CauHoi::find($id);
        $cauHoi->delete();
        return redirect(Route('cau-hoi.danh-sach'));
    }
}
