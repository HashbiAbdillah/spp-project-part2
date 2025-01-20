<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {return view('home.dashboard');})->name('dashboard');
    
    Route::get('/registrasi' , [AuthController::class ,'showregis'])->name('registrasi.tampil');
    Route::post('/registrasi/submit' , [AuthController::class ,'submitregis'])->name('registrasi.submit');

    Route::get('/petugas' , [UsersController::class ,'showpetugas'])->name('petugas.tampil');
    route::get('/petugas/{id}/edit', [UsersController::class, 'editpetugas'])->name('tampil.edit');
    route::put('/petugas/update/{id}', [Userscontroller::class, 'updatepetugas'])->name('petugas.update');
    route::get('/petugas/{id}/view', [UsersController::class, 'viewpetugas'])->name('tampil.view');
    route::delete('/petugas/{id}', [UsersController::class, 'petugasdestroy'])->name('petugas.destroy');

    Route::get('/tmbhkls' , [KelasController::class ,'klsregis'])->name('kls.tampil');
    Route::post('/tmbhkls/submit' , [KelasController::class ,'submitklsregis'])->name('kls.submit');
    Route::get('/kelas' , [KelasController::class ,'showkelas'])->name('kelas.tampil');
    route::get('/kelas/{id_kelas}/edit', [KelasController::class, 'editkelas'])->name('kelas.edit');
    route::put('/kelas/update/{id_kelas}', [KelasController::class, 'updatekelas'])->name('kelas.update');
    route::get('/kelas/{id_kelas}/view', [KelasController::class, 'viewkelas'])->name('kelas.view');
    route::delete('/kelas/{id_kelas}', [KelasController::class, 'kelasdestroy'])->name('kelas.destroy');
    
});

;