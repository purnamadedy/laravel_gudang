<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/gudang', 'GudangController@index');

// Route::get('/gudang/create', 'GudangController@create');

// Route::get('/gudang/{gudang}', 'GudangController@show');

// Route::post('/gudang', 'GudangController@store');

// Route::delete('/gudang/{gudang}', 'GudangController@destroy')->name('gudang.destroy');

// Route::get('/gudang/{gudang}/edit', 'GudangController@edit');

// Route::patch('/gudang/{gudang}', 'GudangController@update');

// Route::resource('gudang', 'GudangController');

// Route::get('/file-upload-rename', 'FileUploadController@fileUploadRename');
// Route::post('/file-upload-rename', 'FileUploadController@prosesfileUploadRename');




// Route::get('/daftar-karyawan', 'DataController@daftarKaryawan');

// Route::get('/table-karyawan', 'DataController@tableKaryawan');

// Route::get('/blog-karyawan', 'DataController@blogKaryawan');
