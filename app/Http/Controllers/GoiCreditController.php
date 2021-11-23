<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
use App\Http\Requests\GoiCreditRequest;
class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsGoiCredit=GoiCredit::all();
        return view('goi-credit.danh-sach',compact('dsGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('goi-credit.them-moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoiCreditRequest $request)
    {
        $Goicredit = new GoiCredit;
        $Goicredit->ten_goi = $request->ten_goi;
        $Goicredit->credit = $request->credit;
        $Goicredit->so_tien = $request ->so_tien;
        $Goicredit->save();
        return redirect(route('goi-credit.danh-sach'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goicreDit = GoiCredit::find($id);

        return view('goi-credit.sua-credit',compact('goicreDit'));
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
        $goicreDit = new GoiCredit();
        $goicreDit = GoiCredit::find($id);
        $goicreDit->ten_goi = $request->input('ten_goi');
        $goicreDit->credit = $request->input('credit');
        $goicreDit->so_tien = $request->input('so_tien');
        $goicreDit->save();
        return redirect(Route('goi-credit.danh-sach'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goicreDit = new GoiCredit();
        $goicreDit = GoiCredit::find($id);
        $goicreDit -> Delete();
        return redirect(Route('goi-credit.danh-sach'));
    }
}
