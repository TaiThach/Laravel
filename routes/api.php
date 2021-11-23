<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('linh-vuc','API\LinhVucAPI@LayDanhSach');
Route::get('cau-hoi','API\CauHoiAPI@LayDanhSach');
Route::get('ABC/{id}','API\CauHoiAPI@ID');
Route::get('goi-credit','API\GoiCreditAPI@LayDanhSach');
Route::get('chi-tiet-luoc-choi','API\ChiTietLuocChoi@LayDanhSach');
Route::get('luoc-choi','API\LuocChoiAPI@LayDanhSach');
Route::get('nguoi-choi','API\NguoiChoiAPI@LayDanhSach');