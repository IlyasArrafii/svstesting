<?php

use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KonsumenController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\PemesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Models\Anggota;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/register', [PagesController::class, 'register']);
Route::get('/pesanan', [PagesController::class, 'pesanan']);









// // ====================================================================
// // Admin

// // Route::group(['middleware']);
// // Route Back End
// Route::get('/loginadmin', [AuthController::class, 'loginadmin']);
// Route::post('/admpost', [AuthController::class, 'PostLoginAdmin']);

// Route::get('/logoutadmin', [AuthController::class, 'logoutadmin']);


// //Home
// Route::get('/dashboard', [HomeController::class, 'index']);



// // Layanan
// Route::get('/layanan', [LayananController::class, 'index']);
// Route::get('/layanan/tambah', [LayananController::class, 'create']);
// Route::post('/layanan/tambah', [LayananController::class, 'store']);
// Route::get('/layanan/{id}', [LayananController::class, 'edit']);
// Route::get('/delete/{id}', [LayananController::class, 'destroy']);
// Route::post('/layanan/edit', [LayananController::class, 'update']);

// // Anggota
// Route::get('/anggota', [AnggotaController::class, 'index']);
// Route::get('/anggota/tambah', [AnggotaController::class, 'create']);
// Route::post('/anggota/tambah', [AnggotaController::class, 'store']);
// Route::get('/adelete/{id}', [AnggotaController::class, 'destroy']);
// Route::get('/anggota/{id}', [AnggotaController::class, 'edit']);
// Route::post('/anggota/edit', [AnggotaController::class, 'update']);

// // Konsumen
// Route::get('/konsumen', [KonsumenController::class, 'index']);
// Route::get('/kdelete/{id}', [KonsumenController::class, 'destroy']);

// // Pemesanan
// Route::get('/admpemesanan', [PemesananController::class, 'index']);
// Route::get('/detail-pemesanan/{id}', [PemesananController::class, 'detail']);
// Route::get('/bukti/{id}', [PemesananController::class, 'bukti']);
// Route::get('/confirm/{id}', [PemesananController::class, 'confirm']);
// Route::get('/tolak/{id}', [PemesananController::class, 'tolak']);
// >>>>>>> 73d132179453262b0042b91f94535f508129bd11
