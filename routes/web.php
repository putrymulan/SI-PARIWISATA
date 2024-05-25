<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\hotelController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layout/template');
});

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

Route::get('/pegawai', [pegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/addform', [pegawaiController::class, 'add'])->name('addpegawai');
Route::post('/pegawai/addform', [pegawaiController::class, 'insertdata'])->name('insertpegawai');
Route::get('/pegawai/updateform/{id}', [pegawaiController::class, 'readdata'])->name('readpegawai');
Route::get('/pegawai/allform/{id}', [pegawaiController::class, 'alldata'])->name('allpegawai');
Route::post('/pegawai/updateform/{id}', [pegawaiController::class, 'updatedata'])->name('updatepegawai');
Route::get('/pegawai/{id}', [pegawaiController::class, 'deletedata'])->name('deletepegawai');
Route::get('/pdf-pegawai', [pegawaiController::class, 'exportpdf'])->name('pdfpegawai');

Route::get('/hotel', [hotelController::class, 'index'])->name('hotel');
Route::get('/hotel/addform', [hotelController::class, 'add'])->name('addhotel');
Route::post('/hotel/addform', [hotelController::class, 'insertdata'])->name('inserthotel');
Route::get('/hotel/updateform/{id}', [hotelController::class, 'readdata'])->name('readhotel');
Route::get('/hotel/allform/{id}', [hotelController::class, 'alldata'])->name('allhotel');
Route::post('/hotel/updateform/{id}', [hotelController::class, 'updatedata'])->name('updatehotel');
Route::get('/hotel/{id}', [hotelController::class, 'deletedata'])->name('deletehotel');
Route::get('/pdf-hotel', [hotelController::class, 'exportpdf'])->name('pdfhotel');
