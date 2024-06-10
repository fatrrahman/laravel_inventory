<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RakBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangTerjualController;
use App\Models\BarangKeluar;
use App\Models\BarangTerjual;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index']);
Route::post('/cek_login', [AuthController::class, 'cek_login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/beranda', [BerandaController::class, 'beranda']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);


Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){
   
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy']);


    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::post('/kategori/store', [KategoriController::class, 'store']);
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

    Route::get('/barang', [BarangController::class, 'index']);
    Route::post('/barang/store', [BarangController::class, 'store']);
    Route::post('/barang/update/{id}', [BarangController::class, 'update']);
    Route::get('/barang/destroy/{id}', [BarangController::class, 'destroy']);

    Route::get('/barangmasuk', [BarangMasukController::class, 'index']);
    Route::post('/barangmasuk/store', [BarangMasukController::class, 'store']);
    Route::post('/barangmasuk/update/{id}', [BarangMasukController::class, 'update']);
    Route::get('/barangmasuk/destroy/{id}', [BarangMasukController::class, 'destroy']);

    Route::get('/rakbarang', [RakBarangController::class, 'index']);
    Route::post('/rakbarang/store', [RakBarangController::class, 'store']);
    Route::post('/rakbarang/update/{id}', [RakBarangController::class, 'update']);
    Route::get('/rakbarang/destroy/{id}', [RakBarangController::class, 'destroy']);

    Route::get('/barangkeluar', [BarangKeluarController::class, 'index']);
    Route::post('/barangkeluar/store', [BarangKeluarController::class, 'store']);
    Route::post('/barangkeluar/update/{id}', [BarangKeluarController::class, 'update']);
    Route::get('/barangkeluar/destroy/{id}', [BarangKeluarController::class, 'destroy']);


    Route::get('/barangterjual', [BarangTerjualController::class, 'index']);
    Route::post('/barangterjual/store', [BarangTerjualController::class, 'store']);
    Route::post('/barangterjual/update/{id}', [BarangTerjualController::class, 'update']);
    Route::get('/barangterjual/destroy/{id}', [BarangTerjualController::class, 'destroy']);

});


Route::group(['middleware' => ['auth', 'checkRole:admin,karyawan']], function(){
    Route::get('/home', [HomeController::class, 'index']);
});