<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use App\Http\Requests\LinhVucRequest;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lấy danh sách lĩnh vực
        $dsLinhVuc=LinhVuc::all();
        return view('linh-vuc.danh-sach',compact('dsLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linh-vuc.them-moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinhVucRequest $request)
    {
        $linhVuc = new LinhVuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();

        return redirect(route('linh-vuc.danh-sach'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $linhVuc = LinhVuc::find($id);

        return view('linh-vuc.sua-linh-vuc',compact('linhVuc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $linhVuc = new LinhVuc();
        $linhVuc = LinhVuc::find($id);
        $linhVuc->ten_linh_vuc = $request->input('ten_linh_vuc');
        $linhVuc->save();

        return redirect(Route('linh-vuc.danh-sach'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response;
     */
    public function destroy($id)
    {
        $linhVuc = new LinhVuc();
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();

        return redirect(Route('linh-vuc.danh-sach'));
    }
}
