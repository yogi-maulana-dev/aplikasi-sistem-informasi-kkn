<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\superadmin\DplController;
use App\Http\Controllers\Mahasiswa\LoginController;
use App\Http\Controllers\Mahasiswa\TugasController;
use App\Http\Controllers\Dosen\LoginDosenController;
use App\Http\Controllers\SuperAdmin\DosenController;
use App\Http\Controllers\SuperAdmin\LokasiController;
use App\Http\Controllers\Mahasiswa\DashboardContoller;
use App\Http\Controllers\SuperAdmin\KelompokController;
use App\Http\Controllers\SuperAdmin\MahasiswaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\SuperAdmin\BuktiPembayaranController;
use App\Http\Controllers\SuperAdmin\LoginSuperAdminController;
use App\Http\Controllers\SuperAdmin\DashboardSuperAdminController;

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

Route::middleware(['guest:web', 'preventBackHistory'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/pendaftaraan', [LoginController::class, 'pendaftaraan'])->name('pendaftaraan');
    Route::post('/loginaction', [LoginController::class, 'loginaction'])->name('loginaction');
    Route::post('/pendaftaraan/simpan', [LoginController::class, 'store'])->name('pendaftaraan.simpan');
    Route::get('/pengumuman', [DashboardContoller::class, 'pengumuman'])->name('pengumuman');
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth:web', 'preventBackHistory'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardContoller::class, 'index'])->name('dashboard');
    Route::get('/pengumuman', [DashboardContoller::class, 'pengumuman'])->name('pengumuman');
    Route::get('/peringatan', [TugasController::class, 'peringatan'])->name('peringatan');
    Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');
    Route::post('/tugas/simpan', [TugasController::class, 'store'])->name('tugas.simpan');
    Route::get('/edit-profil', [DashboardContoller::class, 'edit'])->name('edit-profil');
    Route::put('/profil-update/{id}', [DashboardContoller::class, 'update'])->name('profil-update');
    Route::get('/update-status/{id}', [TugasController::class, 'updateStatus'])->name('updateStatus');
});

Route::prefix('superadmin')
    ->name('superadmin.')
    ->group(function () {
        Route::middleware(['guest:superadmin', 'preventBackHistory'])->group(function () {
            Route::get('/', [LoginSuperAdminController::class, 'redirectToLogin']);

            Route::get('/login', [LoginSuperAdminController::class, 'index'])->name('login');
            Route::post('/loginaction', [LoginSuperAdminController::class, 'loginaction'])->name('loginaction');
        });

        Route::middleware(['auth:superadmin', 'preventBackHistory'])->group(function () {
            Route::post('/logout', [LoginSuperAdminController::class, 'logout'])->name('logout');
            Route::get('/dashboard', [DashboardSuperAdminController::class, 'index'])->name('dashboard');

            Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
            Route::post('/simpan-mahasiswa', [MahasiswaController::class, 'store'])->name('simpan.mahasiswa');
            Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');

            Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
            Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');      
            Route::put('/mahasiswa/aktif/{id}', [MahasiswaController::class, 'aktif'])->name('mahasiswa.aktif');      
            Route::get('/cetak-pdf/{id}', [MahasiswaController::class, 'cetakPDF'])->name('cetak.pdf');

            Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
            Route::post('/simpan-dosen', [DosenController::class, 'store'])->name('simpan.dosen');
            Route::get('/dosen/{id}/edit', [DosenController::class, 'edit'])->name('dosen.edit');

            Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');
            Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');

            Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');
            Route::post('/simpan-lokasi', [LokasiController::class, 'store'])->name('simpan.lokasi');
            Route::get('/lokasi/{id}/edit', [LokasiController::class, 'edit'])->name('lokasi.edit');

            Route::delete('/lokasi/{id}', [LokasiController::class, 'destroy'])->name('lokasi.delete');
            Route::put('/lokasi/{id}', [LokasiController::class, 'update'])->name('lokasi.update');

            Route::post('/getkabupaten', [LokasiController::class, 'getkabupaten'])->name('getkabupaten');
            Route::post('/getkecamatan', [LokasiController::class, 'getkecamatan'])->name('getkecamatan');
            Route::post('/getdesa', [LokasiController::class, 'getdesa'])->name('getdesa');

            Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');
            Route::post('/simpan-lokasi', [LokasiController::class, 'store'])->name('simpan.lokasi');
            Route::get('/lokasi/{id}/edit', [LokasiController::class, 'edit'])->name('lokasi.edit');

            Route::delete('/lokasi/{id}', [LokasiController::class, 'destroy'])->name('lokasi.delete');
            Route::put('/lokasi/{id}', [LokasiController::class, 'update'])->name('lokasi.update');

            Route::get('get-regencies', [LokasiController::class, 'getRegencies'])->name('get.regencies');
            Route::get('get-districts', [LokasiController::class, 'getDistricts'])->name('get.districts');
            Route::get('get-villages', [LokasiController::class, 'getVillages'])->name('get.villages');
            
            Route::get('/kelompok', [KelompokController::class, 'index'])->name('kelompok');
            Route::get('/kelompok/search', [KelompokController::class, 'search'])->name('kelompok.search');
            Route::post('/simpan-kelompok', [KelompokController::class, 'store'])->name('simpan.kelompok');
            Route::get('/kelompok/{nokelompok}/edit', [KelompokController::class, 'edit'])->name('kelompok.edit');
            // Route::put('/kelompok/{nokelompok}', [KelompokController::class, 'update'])->name('kelompok.update');
            Route::put('/kelompok/update/{nokelompok}', [KelompokController::class, 'update'])->name('kelompok.update');
            
            Route::get('/cari-dosen', [KelompokController::class, 'cariDosen'])->name('cari.dosen');
            Route::get('/cari-lokasi', [KelompokController::class, 'cariLokasi'])->name('cari.lokasi');

            Route::get('/kelompok/searchedit', [KelompokController::class, 'searchedit'])->name('kelompok.searchedit');
            Route::delete('/kelompok/{nokelompok}', [KelompokController::class, 'destroy'])->name('kelompok.delete');

            Route::get('/dpl', [DplController::class, 'index'])->name('dpl');

        });
    });

    Route::prefix('dosen')
    ->name('dosen.')
    ->group(function () {
        Route::middleware(['guest:dosen', 'preventBackHistory'])->group(function () {
            Route::get('/', [LoginDosenController::class, 'redirectToLogin']);

            Route::get('/login', [LoginDosenController::class, 'index'])->name('login');
            Route::post('/loginaction', [LoginDosenController::class, 'loginaction'])->name('loginaction');
        });

        Route::middleware(['auth:superadmin', 'preventBackHistory'])->group(function () {
            Route::post('/logout', [LoginDosenController::class, 'logout'])->name('logout');
            Route::get('/dashboard', [DashboardSuperAdminController::class, 'index'])->name('dashboard');

        

        });
    });
