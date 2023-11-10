<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\UserController;

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

// Route for guest
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');


Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/pengguna', [UserController::class, 'index'])->name('users.index');
    Route::get('/tambah-pengguna', [UserController::class, 'tambah'])->name('tambah.pengguna');
    Route::patch('/disabled-pengguna/{id}', [UserController::class, 'disabled'])->name('disabled.pengguna');
    Route::patch('/activated-pengguna/{id}', [UserController::class, 'activated'])->name('activated.pengguna');
    Route::post('/simpan-pengguna', [UserController::class, 'simpan'])->name('simpan.pengguna');

    Route::get('/tower', [TowerController::class, 'index'])->name('tower.index');
    Route::get('/markers', [TowerController::class, 'markers'])->name('tower.markers');
    Route::get('/tambah-tower/{latitude}/{longtitude}', [TowerController::class, 'tambah'])->name('tower.tambah');
    Route::get('/edit-tower/{id}', [TowerController::class, 'edit'])->name('tower.edit');
    Route::post('/simpan-tower', [TowerController::class, 'simpan'])->name('tower.simpan');
    Route::put('/update-tower/{id}', [TowerController::class, 'update'])->name('tower.update');
});
