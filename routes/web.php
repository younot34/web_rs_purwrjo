<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/alurPendaftaran', [HomeController::class, 'alurPendaftaran']);
Route::get('/Berita', [HomeController::class, 'berita']);
Route::get('/direksi', [HomeController::class, 'direksi']);
Route::get('/farmasi', [HomeController::class, 'farmasi']);
Route::get('/fasilitas', [HomeController::class, 'fasilitas']);
Route::get('/gizi', [HomeController::class, 'gizi']);
Route::get('/jadwal', [HomeController::class, 'jadwal']);
Route::get('/jadwalPoli', [HomeController::class, 'jadwalPoli']);
Route::get('/karir', [HomeController::class, 'karir']);
Route::get('/kerjasama', [HomeController::class, 'kerjasama']);
Route::get('/khitan', [HomeController::class, 'khitan']);
Route::get('/klinikSpesialis', [HomeController::class, 'klinikSpesialis']);
Route::get('/lab', [HomeController::class, 'lab']);
Route::get('/laporanakuntan', [HomeController::class, 'laporanakuntan']);
Route::get('/layanan', [HomeController::class, 'layanan']);
Route::get('/layananUnggul', [HomeController::class, 'layananUnggul']);
Route::get('/mcu', [HomeController::class, 'mcu']);
Route::get('/perjanjianKinerja', [HomeController::class, 'perjanjianKinerja']);
Route::get('/radiologi', [HomeController::class, 'radiologi']);
Route::get('/rawatInap', [HomeController::class, 'rawatInap']);
Route::get('/rawatJalan', [HomeController::class, 'rawatJalan']);
Route::get('/rencanaKerja', [HomeController::class, 'rencanakerja']);
Route::get('/sejarah', [HomeController::class, 'sejarah']);
Route::get('/talkShow', [HomeController::class, 'talkShow']);
Route::get('/tarifLayanan', [HomeController::class, 'tarifLayanan']);
Route::get('/tataTertib', [HomeController::class, 'tataTertib']);
Route::get('/visiMisi', [HomeController::class, 'visiMisi']);
Route::get('/contact-us', [HomeController::class, 'contact_us']);
Route::get('/ambulance', [HomeController::class, 'ambulance']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/login', [AuthController::class, 'authenticated']);


//dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::resource('berita', BeritaController::class)->middleware('auth');
Route::resource('create', BeritaController::class)->middleware('auth');
