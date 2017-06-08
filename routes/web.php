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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('halaman/{id}', 'PrakerinController@param');
Route::get('/{a}', 'PrakerinController@parameter');

Route::get('/testmodel', function(){
	$q = App\Blog::all();
	return $q;
});


Route::get('/produk', function(){
	$pro = App\produk::all();
	return $pro;
});

Route::get('/pengguna', function(){
	$peng = App\pengguna::all();
	return $peng;
});

Route::get('/pengaturan', function(){
	$penggatur = App\pengaturan::all();
	return $penggatur;
});



//latihan Controller
//controller digunakan sebagai pengatur alur program

Route::get('','PrakerinController@percobaan');
Route::get('/test2','PrakerinController@sepakbola');
Route::get('/test3','PrakerinController@makanan');
Route::get('/test4','PrakerinController@pakaian');
Route::get('/test5','PrakerinController@musim');
Route::get('/test6','PrakerinController@olahraga');