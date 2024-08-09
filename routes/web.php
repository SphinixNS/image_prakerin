<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\GuruController;
use App\Http\Controllers\backend\KelasController;
use App\Http\Controllers\backend\JurusanController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\imports\ImportsSiswaController;
use App\Http\Controllers\backend\PembimbingController;
use App\Http\Controllers\backend\PerusahaanController;
use App\Http\Controllers\backend\KonsentrasiController;
use App\Http\Controllers\backend\PemetaanController;
use App\Http\Controllers\backend\SiswaController;
use App\Http\Controllers\backend\TahunAjaranController;

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
    return view('frontend.pages.landingpage');
});

Route::get('/siswa', function () {
    return view('frontend.pages.siswa.index');
});

// Route::get('/login', function () {
//     return view('auth.login');
// }) -> name('login');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/', [LoginController::class, 'index'])->name('dashboard');




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('auth', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['namespace' => 'App\Http\Controllers\Backend','prefix' => 'admin', 'as' => 'admin.'], function () {
    // Auth::routes();
    Route::middleware('auth')->group(function () {


        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => 'perusahaan' ,'as' => 'perusahaan.'], function(){
            Route::get('/perusahaan', [PerusahaanController::class, 'perusahaan'])->name('perusahaan');
            Route::get('/', [PerusahaanController::class, 'index'])->name('index');
            Route::get('/create', [PerusahaanController::class, 'create'])->name('create');
            Route::post('/store', [PerusahaanController::class, 'store'])->name('store');
            Route::get('detail/{perusahaan}', [PerusahaanController::class , 'detail'])->name('detail');
            Route::get('search', [PerusahaanController::class , 'search'])->name('search');
            Route::get('pemetaan/{jurusan}', [PerusahaanController::class , 'pemetaan'])->name('pemetaan');
            Route::get('jurusan/{perusahaan}', [PerusahaanController::class , 'jurusan'])->name('jurusan');
            Route::get('edit/{perusahaan}', [PerusahaanController::class , 'edit'])->name('edit');
            Route::post('/update/{perusahaan}', [PerusahaanController::class, 'update'])->name('update');
            Route::get('delete/{perusahaan}', [PerusahaanController::class , 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'tahun_ajaran' ,'as' => 'tahun_ajaran.'], function(){
            Route::get('/tahun_ajaran', [TahunAjaranController::class, 'tahun_ajaran'])->name('tahun_ajaran');
            Route::get('/', [TahunAjaranController::class, 'index'])->name('index');
            Route::get('/create', [TahunAjaranController::class, 'create'])->name('create');
            Route::post('/store', [TahunAjaranController::class, 'store'])->name('store');
            Route::get('edit/{tahun_ajaran}', [TahunAjaranController::class , 'edit'])->name('edit');
            Route::post('/update/{tahun_ajaran}', [TahunAjaranController::class, 'update'])->name('update');
            Route::get('/status/{tahun_ajaran}', [TahunAjaranController::class, 'status'])->name('update');
            Route::get('delete/{tahun_ajaran}', [TahunAjaranController::class , 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'jurusan' ,'as' => 'jurusan.'], function(){
            Route::get('/jurusan', [JurusanController::class, 'jurusan'])->name('jurusan');
            Route::get('/', [JurusanController::class, 'index'])->name('index');
            Route::get('/create', [JurusanController::class, 'create'])->name('create');
            Route::post('/store', [JurusanController::class, 'store'])->name('store');
            Route::get('edit/{jurusan}', [JurusanController::class , 'edit'])->name('edit');
            Route::post('/update/{jurusan}', [JurusanController::class, 'update'])->name('update');
            Route::get('delete/{jurusan}', [JurusanController::class , 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'konsentrasi' ,'as' => 'konsentrasi.'], function(){
            Route::get('/konsentrasi', [KonsentrasiController::class, 'konsentrasi'])->name('konsentrasi');
            Route::get('/', [KonsentrasiController::class, 'index'])->name('index');
            Route::get('/create', [KonsentrasiController::class, 'create'])->name('create');
            Route::post('/store', [KonsentrasiController::class, 'store'])->name('store');
            Route::get('edit/{konsentrasi}', [KonsentrasiController::class , 'edit'])->name('edit');
            Route::post('/update/{konsentrasi}', [KonsentrasiController::class, 'update'])->name('update');
            Route::get('delete/{konsentrasi}', [KonsentrasiController::class , 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'kelas' ,'as' => 'kelas.'], function(){
            Route::get('/kelas', [KelasController::class, 'kelas'])->name('kelas');
            Route::get('/detail/{kelas}/siswa', [KelasController::class, 'siswa'])->name('siswa');
            Route::get('/', [KelasController::class, 'index'])->name('index');
            Route::get('search', [KelasController::class , 'search'])->name('search');
            Route::get('/create', [KelasController::class, 'create'])->name('create');
            Route::post('/store', [KelasController::class, 'store'])->name('store');
            Route::get('detail/{kelas}', [KelasController::class , 'detail'])->name('detail');
            Route::get('edit/{kelas}', [KelasController::class , 'edit'])->name('edit');
            Route::post('/update/{kelas}', [KelasController::class, 'update'])->name('update');
            Route::get('delete/{kelas}', [KelasController::class , 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'guru' ,'as' => 'guru.'], function(){
            Route::get('/guru', [GuruController::class, 'guru'])->name('guru');
            Route::get('/', [GuruController::class, 'index'])->name('index');
            Route::get('/create', [GuruController::class, 'create'])->name('create');
            Route::post('/store', [GuruController::class, 'store'])->name('store');
            Route::get('edit/{guru}', [GuruController::class , 'edit'])->name('edit');
            Route::post('/update/{guru}', [GuruController::class, 'update'])->name('update');
            Route::get('delete/{guru}', [GuruController::class , 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'pembimbing' ,'as' => 'pembimbing.'], function(){
            Route::get('/pembimbing', [PembimbingController::class, 'pembimbing'])->name('pembimbing');
            Route::get('/', [PembimbingController::class, 'index'])->name('index');
            Route::get('/create', [PembimbingController::class, 'create'])->name('create');
            Route::post('/store', [PembimbingController::class, 'store'])->name('store');
            Route::get('edit/{pembimbing}', [PembimbingController::class , 'edit'])->name('edit');
            Route::post('/update/{pembimbing}', [PembimbingController::class, 'update'])->name('update');
            Route::get('delete/{pembimbing}', [PembimbingController::class , 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'siswa' ,'as' => 'siswa.'], function(){
            Route::get('/siswa', [SiswaController::class, 'siswa'])->name('siswa');
            Route::get('/search/{kelas}', [SiswaController::class, 'search'])->name('search');
            Route::get('/', [SiswaController::class, 'index'])->name('index');
            Route::post('/import', [ImportsSiswaController::class, 'import'])->name('import');
            Route::get('/create', [SiswaController::class, 'create'])->name('create');
            Route::post('/store', [SiswaController::class, 'store'])->name('store');
            Route::get('detail/{siswa}', [SiswaController::class , 'detail'])->name('detail');
            Route::get('edit/{siswa}', [SiswaController::class , 'edit'])->name('edit');
            Route::post('/update/{siswa}', [SiswaController::class, 'update'])->name('update');
            Route::get('delete/{siswa}', [SiswaController::class , 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'pemetaan' ,'as' => 'pemetaan.'], function(){
            Route::get('/pemetaan', [PemetaanController::class, 'pemetaan'])->name('pemetaan');
            Route::get('/pemetaan_all', [PemetaanController::class, 'pemetaan_all'])->name('pemetaan_all');
            Route::get('/detail/{pemetaan}/siswa', [PemetaanController::class, 'siswa'])->name('siswa');
            Route::get('/', [PemetaanController::class, 'index'])->name('index');
            Route::get('search', [PemetaanController::class , 'search'])->name('search');
            Route::get('/create/{kelas}', [PemetaanController::class, 'create'])->name('create');
            Route::post('/store', [PemetaanController::class, 'store'])->name('store');
            Route::get('detail/{pemetaan}', [PemetaanController::class , 'detail'])->name('detail');
            Route::get('delete/{pemetaan}', [PemetaanController::class , 'delete'])->name('delete');
            Route::get('terima/{siswaPerusahaan}', [PemetaanController::class , 'terima'])->name('terima');
            Route::get('tolak/{siswaPerusahaan}', [PemetaanController::class , 'tolak'])->name('tolak');
        });


    });
});
