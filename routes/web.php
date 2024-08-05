<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PerusahaanController;

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
            Route::get('/getDataPerusahaan', [PerusahaanController::class, 'getDataPerusahaan'])->name('getDataPerusahaan');
            Route::get('/', [PerusahaanController::class, 'index'])->name('index');
            Route::get('/create', [PerusahaanController::class, 'create'])->name('create');
            Route::post('/store', [PerusahaanController::class, 'store'])->name('store');
            Route::get('edit/{perusahaan}', [PerusahaanController::class , 'edit'])->name('edit');
            Route::post('/update/{perusahaan}', [PerusahaanController::class, 'update'])->name('update');
            Route::get('delete/{perusahaan}', [PerusahaanController::class , 'delete'])->name('delete');
        });

        // Route::group(['prefix' => 'section1' ,'as' => 'section1.'], function(){
        //     Route::get('/', [Section1Controller::class, 'index'])->name('index');
        //     Route::post('/store', [Section1Controller::class, 'store'])->name('store');
        //     Route::post('/update/{content}', [Section1Controller::class, 'update'])->name('update');
        // });

       

    });
});
