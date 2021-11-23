<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test','QuanTriVienController@layThongTin');

Route::get('/','QuanTriVienController@dangNhap')->name('dang-nhap')->middleware('guest');
Route::post('/dang-nhap','QuanTriVienController@xldangNhap')->name('xl-dang-nhap');
Route::get('/dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');
Route::get('/profile', function(){
	return view('profile');
})->name('profile');
Route::middleware('auth')->group(function(){	
		Route::get('/trang-chu', function(){
			return view('layout');
		})->name('trang-chu');
		Route::prefix('linh-vuc')->group(function(){
			Route::name('linh-vuc.')->group(function(){
				Route::get('/', 'LinhVucController@index')->name('danh-sach');
		
				Route::get('/them-moi', 'LinhVucController@create')->name('them-moi');
		
				Route::post('/them-moi-xl', 'LinhVucController@store')->name('xl-them-moi');
		
				Route::get('/show-cap-nhat/{id}', 'LinhVucController@show')->name('show-cap-nhat');
		
				Route::post('/cap-nhat/{id}', 'LinhVucController@update')->name('cap-nhat');
		
				Route::get('/xoa/{id}', 'LinhVucController@destroy')->name('xoa');
			});
		
		});
		Route::prefix('cau-hoi')->group(function(){
			Route::name('cau-hoi.')->group(function(){
				Route::get('/', 'CauHoiConTroller@index')->name('danh-sach');
		
				Route::get('/them-moi', 'CauHoiConTroller@create')->name('them-moi');
		
				Route::post('/them-moi-xl', 'CauHoiConTroller@store')->name('xl-them-moi');
		
				Route::get('/show-cap-nhat/{id}', 'CauHoiConTroller@show')->name('show-cap-nhat');
		
				Route::post('/cap-nhat/{id}', 'CauHoiConTroller@update')->name('cap-nhat');
		
				Route::get('/xoa/{id}', 'CauHoiConTroller@destroy')->name('xoa');
			});
		});
		Route::prefix('nguoi-choi')->group(function(){
			Route::name('nguoi-choi.')->group(function(){
				Route::get('/', 'NguoiChoiController@index')->name('danh-sach');
		
				Route::get('/them-moi', 'NguoiChoiController@create')->name('them-moi');
		
				Route::post('/them-moi-xl', 'NguoiChoiController@store')->name('xl-them-moi');
		
			Route::get('/show-cap-nhat/{id}','NguoiChoiController@show')->name('show-cap-nhat');
		
				Route::post('/cap-nhat/{id}', 'NguoiChoiController@update')->name('cap-nhat');
		
				Route::get('/xoa/{id}', 'NguoiChoiController@destroy')->name('xoa');
			});
		
		});
		Route::prefix('goi-credit')->group(function(){
			Route::name('goi-credit.')->group(function(){
				Route::get('/', 'GoiCreditController@index')->name('danh-sach');
		
				Route::get('/them-moi', 'GoiCreditController@create')->name('them-moi');
		
				Route::post('/them-moi-xl', 'GoiCreditController@store')->name('xl-them-moi');
		
				Route::get('/show-cap-nhat/{id}', 'GoiCreditController@show')->name('show-cap-nhat');
		
				Route::post('/cap-nhat/{id}', 'GoiCreditController@update')->name('cap-nhat');
		
				Route::get('/xoa/{id}', 'GoiCreditController@destroy')->name('xoa');
			});
		});
		Route::prefix('luot-choi')->group(function(){
			Route::name('luot-choi.')->group(function(){
				Route::get('/', 'LuocChoiController@index')->name('danh-sach');
			});
		});
		Route::prefix('cau-hinh')->group(function(){
			Route::name('cau-hinh.')->group(function(){
				Route::get('/app', 'CauHinhController@index1')->name('danh-sach-app');
				Route::get('/diem', 'CauHinhController@index2')->name('danh-sach-diem-cau-hoi');
				Route::get('/trogiup', 'CauHinhController@index3')->name('danh-sach-tro-giup');
			});
		});
});
Route::get('mail/send','SenMailController@send');