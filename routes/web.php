<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\penyakitController;
use App\Http\Controllers\pilihGejalaController;
use App\Http\Controllers\PasienController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// frontend

Route::get('/', [homeController::class, 'index']);
Route::get('/diagnosa/pilihgejala', [\App\Http\Controllers\pilihGejalaController::class, 'index']);
Route::resource('/diagnosa/datadiri', \App\Http\Controllers\datadiriController::class);
Route::resource('/diagnosa/hasildiagnosa', \App\Http\Controllers\HasildiagnosaController::class);
Route::resource('/diagnosa', App\Http\Controllers\DiagnosaController::class);
Route::resource('/konsultasi', PasienController::class);
// Route::get('/diagnosa/pilihgejala', [DiagnosaController::class, 'gejala']);


Route::get('/diagnosa/hasil', function(){
    return view('diagnosa.hasildiagnosa', [
        "title" => "Diagnosa"
    ]);
});

// Route::get('/diagnosa', function () {
//     return view('diagnosa' , [
//         "title" => "diagnosa"
//     ]);
// });

// ============================================================================================================================ //
// ============================================================================================================================ //

 // backend

Route::middleware(['auth','role:Admin'])->group(function(){

    Route::resource('/admin/datapenyakit', \App\Http\Controllers\penyakitController::class);
    Route::resource('/admin/detailpenyakit', \App\Http\Controllers\datadetailpenyakitController::class);
    Route::resource('/admin/detailpenyakit_gejala', \App\Http\Controllers\DPgejalaController::class);
    Route::resource('/admin/detailpenyakit_penyebab', \App\Http\Controllers\DPpenyebabController::class);
    Route::resource('/admin/detailpenyakit_solusi', \App\Http\Controllers\DPsolusiController::class);
    // Route::get('/admin/penyakit/create', [penyakitController::class, 'create']);
    // Route::get('/admin/penyakit/{id}/edit', [penyakitController::class, 'edit']);
    // Route::put('/admin/penyakit/{id}', [penyakitController::class, 'update']);
    // Route::post('/admin/penyakit/store', [penyakitController::class, 'store']);
    // Route::delete('/admin/penyakit/{id}',[penyakitController::class, 'destroy']);
    Route::resource('/admin/datagejala', \App\Http\Controllers\datagejalaController::class);
    Route::resource('/admin/datapenyebab', \App\Http\Controllers\datapenyebabController::class);
    Route::resource('/admin/datasolusi', \App\Http\Controllers\SolusiPenyakitController::class);
    Route::resource('/admin/datapasien', \App\Http\Controllers\datapasienController::class);
    Route::resource('/admin/datadiagnosa', \App\Http\Controllers\DataDiagnosaController::class);
    Route::resource('/admin/datauser', \App\Http\Controllers\Auth\RegisterController::class);
    Route::get('/home', [App\Http\Controllers\HomelaraController::class, 'index'])->name('home');

    // Route::get('/admin/user', function () {
    //     return view('admin.page.pengguna' , [
    //         "title" => "Pengguna"
    //     ]);
    // });
});

Auth::routes();

Route::get('/register', function () {
    return view('auth.register');
});


// Route::get('/admin', function () {
//     return view('admin.login' , [
//         "title" => "Login"
//     ]);
// });

// Route::get('/admin/penyakit', function () {
//     return view('admin.penyakit' , [
//         "title" => "Data Penyakit"
//     ]);
// });

Route::get('/creategejala', function(){
    return view('admin.page.detailpenyakit.creategejala', [
        "title" => "creategejala"
    ]);
});



