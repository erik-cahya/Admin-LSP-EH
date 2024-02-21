<?php

use App\Http\Controllers\DokumenController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\Surat\SuratTugasAsesorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin.dashboard.index');
});


Route::resource('/qr-code', QRCodeController::class);

Route::get('/download-qrcode/{id}', [QRCodeController::class, 'download'])->name('download.qrcode');
Route::get('/download-qr/{content}', [QRCodeController::class, 'downloadQR'])->name('download.qr');

Route::get('surat-tugas-asesor', [SuratTugasAsesorController::class, 'index'])->name('surat-tugas-asesor.view');
Route::get('surat-tugas-asesor/create', [SuratTugasAsesorController::class, 'createSurat'])->name('surat-tugas-asesor.create');
