<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


use App\Http\Controllers\KokalController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OlahanKokalController;

use App\Http\Controllers\DetailPemesanan;


//Route::get('/',[HomeController::class,'index']);
Route::get('/',[KokalController::class,'index']);
Route::get('/KOKAL',[DetailPemesanan::class,'detailpemesanan']);

// Route::get('/detailpemesanan', function () {
//     return view('detailpemesanan');
// });
Route::resource('admin',AdminController::class);

Route::get('/olahankokal',[OlahanKokalController::class,'index']);
Route::post('/tambaholahan',[OlahanKokalController::class,'tambaholahan']);

Route::get('/order',[DetailPemesanan::class,'order']);
Route::get('/detailorder',[DetailPemesanan::class,'detailorder']);
Route::get('/cartorder',[DetailPemesanan::class,'cart']);
Route::get('/cartorder/{id}',[DetailPemesanan::class,'cartorder']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
