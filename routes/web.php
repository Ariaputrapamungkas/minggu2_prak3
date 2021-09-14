<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerRemote;
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
Route::get('/welcome' , [ControllerRemote::class,'homepage']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [ControllerRemote::class,'m']);
    Route::get('/teknik-informatika', [ControllerRemote::class,'t']);


Route::get('/news/{angka}', [ControllerRemote::class,'bt']);
});
Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [ControllerRemote::class,'pk']);
    Route::get('/laboratorium', [ControllerRemote::class,'lab']);
    Route::get('/kelas', [ControllerRemote::class,'kls']);
    Route::get('/lainnya', [ControllerRemote::class,'lain']);
Route::get('/aboutus', [ControllerRemote::class,'soal']);

Route::get('/comment/{nama}/{pesan}', [ControllerRemote::class,'komen']);
});