<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PresensiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\PortalGuruController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PertemuanController;

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

// landing page
Route::get('/', [HomeController::class, 'index']);


// profile
Route::get('/profileSMPN16', [ProfileController::class, 'index']);

// kesiswaan
Route::get('/kesiswaan', [KesiswaanController::class, 'index']);



// PPDB
Route::get('/ppdb', [PPDBController::class, 'index']);


// kepegawaian
Route::get('/kepegawaian', [KepegawaianController::class, 'index']);


// portal guru
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class , 'authenticate']) ;

// logout
Route::post('/logout', [LogoutController::class , 'logout']) ;



// =============================== dashboard ==============================
//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// presensi per kelas
Route::get('/dashboard/{jadwal}', [DashboardController::class, 'show'])->middleware('auth');
//menampilkan create pertemuan
Route::get('/dashboard/{jadwal}/pertemuan', [PertemuanController::class, 'index'])->middleware('auth');
// create pertemuan
Route::post('/dashboard', [DashboardController::class, 'store'])->middleware('auth');
// delete pertemuan
Route::delete('/dashboard/{pertemuan}', [DashboardController::class, 'destroy'])->middleware('auth');
// edit pertemuan
Route::get('/dashboard/{pertemuan}/edit', [DashboardController::class, 'edit'])->middleware('auth');
// update pertemuan
Route::put('/dashboard/{pertemuan}', [DashboardController::class, 'update'])->middleware('auth');





// ======================== presensi ===================================
// presensi murid all
Route::get('/dashboard/{pertemuan}/presensiMurid', [PertemuanController::class, 'presensiall'])->middleware('auth');
// presensi Update
Route::put('/dashboard/{pertemuan}/persensiUpdate', [PertemuanController::class, 'update'])->middleware('auth');







// =================================== profile ==============================================
//profile user
Route::get('/profileUser', [EditProfileController::class, 'index'])->middleware('auth');
// edit profile
Route::get('/profileUser/{user}/edit', [EditProfileController::class, 'edit'])->middleware('auth');
// update password
Route::put('/profileUser/{user}/', [EditProfileController::class, 'update'])->middleware('auth');






//================================== Admin Panel =======================================
//tampil menu admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
// tampil menu admin guru
Route::get('/admin/guru', [AdminController::class, 'adminGuru'])->middleware('auth');
// tambah guru ke db
Route::post('/admin/guru', [AdminController::class, 'adminGuruTambah'])->middleware('auth');
// edit guru
Route::get('/admin/guru/{user}/edit', [AdminController::class, 'adminGuruEdit'])->middleware('auth');
// update guru
Route::put('/admin/guru/{user}', [AdminController::class, 'adminGuruUpdate'])->middleware('auth');
// tampil menu admin murid
Route::get('/admin/murid', [AdminController::class, 'adminMurid'])->middleware('auth');
// tambah murid baru ke db
Route::post('/admin/murid', [AdminController::class, 'adminMuridTambah'])->middleware('auth');
// edit murid
Route::get('/admin/murid/{murid}/edit', [AdminController::class, 'adminMuridEdit'])->middleware('auth');
// update Murid
Route::put('/admin/murid/{murid}', [AdminController::class, 'adminMuridUpdate'])->middleware('auth');
// tampil menu guruMapel
Route::get('/admin/guruMapel', [AdminController::class, 'adminGuruMapel'])->middleware('auth');
// tambah guruMapel baru ke db
Route::post('/admin/guruMapel', [AdminController::class, 'adminGuruMapelTambah'])->middleware('auth');
// edit guruMapel
Route::get('/admin/guruMapel/{guruMapel}/edit', [AdminController::class, 'adminGuruMapelEdit'])->middleware('auth');
// update GuruMapel
Route::put('/admin/guruMapel/{guruMapel}', [AdminController::class, 'adminGuruMapelUpdate'])->middleware('auth');
// tampil menu jadwal
Route::get('/admin/jadwal', [AdminController::class, 'adminJadwal'])->middleware('auth');
// tambah jadwal baru ke db
Route::post('/admin/jadwal', [AdminController::class, 'adminJadwalTambah'])->middleware('auth');
// edit jadwal
Route::get('/admin/jadwal/{jadwal}/edit', [AdminController::class, 'adminJadwalEdit'])->middleware('auth');
// update jadwal
Route::put('/admin/jadwal/{jadwal}', [AdminController::class, 'adminJadwalUpdate'])->middleware('auth');
