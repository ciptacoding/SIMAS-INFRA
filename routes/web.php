<?php

use App\Http\Controllers\AsetTowerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TeamController;
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

    Route::get('/aset-tower', [AsetTowerController::class, 'index'])->name('aset.index');
    Route::get('/aset-tower/{id}', [AsetTowerController::class, 'detail'])->name('aset.detail');
    Route::get('/tambah-aset', [AsetTowerController::class, 'tambah'])->name('aset.tambah');
    Route::get('/edit-aset/{id}', [AsetTowerController::class, 'edit'])->name('aset.edit');
    Route::post('/simpan-aset', [AsetTowerController::class, 'simpan'])->name('aset.simpan');
    Route::put('/update-aset/{id}', [AsetTowerController::class, 'update'])->name('aset.update');
    Route::delete('/delete-aset/{id}', [AsetTowerController::class, 'delete'])->name('aset.delete');

    Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/teams/{id}', [TeamController::class, 'detail'])->name('teams.detail');
    Route::get('/teams-tambah', [TeamController::class, 'tambah'])->name('teams.tambah');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('teams.edit');
    Route::post('/teams', [TeamController::class, 'simpan'])->name('teams.simpan');
    Route::put('/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/{id}', [TeamController::class, 'delete'])->name('teams.delete');

    Route::get('/maintenances', [MaintenanceController::class, 'index'])->name('maintenance.index');
    Route::get('/maintenances/{id}', [MaintenanceController::class, 'generatePenugasan'])->name('generate.penugasan');
    Route::get('/request-maintenance', [MaintenanceController::class, 'tambah'])->name('maintenance.tambah');
    Route::get('/maintenance-notification', [MaintenanceController::class, 'notification'])->name('maintenance.notification');
    Route::post('/maintenances', [MaintenanceController::class, 'simpan'])->name('maintenance.simpan');
    Route::delete('/maintenance/{id}', [MaintenanceController::class, 'delete'])->name('maintenance.delete');

    Route::get('/notifications', [NotificationController::class, 'index'])->name('notification.index');
    Route::get('/notifications/{id}', [NotificationController::class, 'detail'])->name('notification.detail');
    Route::patch('/notifications-accept/{id}', [NotificationController::class, 'accept'])->name('notification.accept');
    Route::patch('/notifications-decline/{id}', [NotificationController::class, 'decline'])->name('notification.decline');

    Route::get('/laporan-maintenance', [LaporanController::class, 'maintenance'])->name('laporan.maintenance');
    Route::get('/laporan-sparepart', [LaporanController::class, 'sparepart'])->name('laporan.sparepart');
    Route::get('/laporan-req-maintenance', [LaporanController::class, 'reqMaintenance'])->name('laporan.request');
    Route::get('/laporan-lokasi', [LaporanController::class, 'lokasi'])->name('laporan.lokasi');
    Route::get('/laporan-data-team', [LaporanController::class, 'team'])->name('laporan.team');
    Route::get('/tambah-laporan', [LaporanController::class, 'tambah'])->name('laporan.tambah');
    Route::get('/laporan/edit/{id}', [LaporanController::class, 'edit'])->name('laporan.edit');
    Route::get('/laporan-download/{id}', [LaporanController::class, 'download'])->name('laporan.download');
    Route::post('/laporan', [LaporanController::class, 'simpan'])->name('laporan.simpan');
    Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::delete('/laporan/{id}', [LaporanController::class, 'delete'])->name('laporan.delete');
});
