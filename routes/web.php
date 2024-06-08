<?php

use App\Http\Controllers\AtletController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PbvsiController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StrukturalController;
use App\Http\Controllers\TentangController;
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

// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('tentang-kami', [HomeController::class, 'tentang_kami']);
Route::get('/detail-club', [HomeController::class, 'detail_club']);
Route::get('/struktur-organisasi', [HomeController::class, 'struktur_organisasi']);
Route::get('/atlet-kota-cirebon', [HomeController::class, 'atlet_kota_cirebon']);
Route::get('/hubungi-kami', [HomeController::class, 'hubungi_kami']);
Route::get('/peraturan', [HomeController::class, 'peraturan']);
Route::get('/club-voli', [HomeController::class, 'club_voli']);
Route::get('/detail-prestasi', [HomeController::class, 'detail_prestasi']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::prefix('/admin')->middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

    // Data
    Route::resource('sliders', SliderController::class);
    Route::resource('pbvsi', PbvsiController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('tentang', TentangController::class);
    Route::resource('organisasi', OrganisasiController::class);
    Route::resource('atlet', AtletController::class);
    Route::resource('peraturan', PeraturanController::class);
    Route::resource('club', ClubController::class);
    Route::resource('detail', DetailController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('struktural', StrukturalController::class);
    // Route::resource('contact', ContactController::class);
});
