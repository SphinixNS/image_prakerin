<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GuruController;
use App\Http\Controllers\backend\JurusanController;
use App\Http\Controllers\backend\KelasController;
use App\Http\Controllers\backend\KonsentrasiController;
use App\Http\Controllers\backend\PerusahaanController;
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
            Route::get('/', [KelasController::class, 'index'])->name('index');
            Route::get('/create', [KelasController::class, 'create'])->name('create');
            Route::post('/store', [KelasController::class, 'store'])->name('store');
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

        // Route::group(['prefix' => 'section1' ,'as' => 'section1.'], function(){
        //     Route::get('/', [Section1Controller::class, 'index'])->name('index');
        //     Route::post('/store', [Section1Controller::class, 'store'])->name('store');
        //     Route::post('/update/{content}', [Section1Controller::class, 'update'])->name('update');
        // });

       

    });
});
