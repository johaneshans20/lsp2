<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KursusController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/authLogin', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dasbor', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dataMahasiswa', [DashboardController::class, 'data_Mahasiswa'])->middleware('admin');
Route::get('/datamahasiswa/tambah', [DashboardController::class, 'tmbhMhs'])->middleware('admin');
Route::post('/tambahdataMhs', [DashboardController::class, 'tmbhdataMhs'])->middleware('admin');
Route::get('/datamhs/{id}', [DashboardController::class, 'editmhs'])->middleware('admin');
Route::post('/editdataMhs/{id}', [DashboardController::class, 'ubahmhs'])->middleware('admin');
Route::get('/dataPangajuan', [DashboardController::class, 'dataPngjn'])->middleware('admin');
Route::resource('/dataKursus', KursusController::class)->middleware('admin');
Route::get('/pengajuan', [DashboardController::class, 'pgjn']);
Route::get('/pengajuan/tambahpengajuan', [DashboardController::class, 'tmbhpgjn']);
Route::post('/tambahdatapgjn', [DashboardController::class, 'tmbhdatapgjn']);
Route::put('/konfirmasi/{id_user}', [DashboardController::class, 'konfirmasi']);
Route::delete('/hapuspelanggan/{id}', [DashboardController::class, 'hapusMHS'])->middleware('admin');
