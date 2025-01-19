<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrasi' , [AuthController::class ,'showregis'])->name('registrasi.tampil');
Route::post('/registrasi/submit' , [AuthController::class ,'submitregis'])->name('registrasi.submit');

Route::get('/petugas' , [AuthController::class ,'showpetugas'])->name('petugas.tampil');
route::get('/petugas/{id}/edit', [UsersController::class, 'editpetugas'])->name('tampil.edit');
route::put('/petugas/update/{id}', [Userscontroller::class, 'updatepetugas'])->name('petugas.update');
route::get('/petugas/{id}/view', [UsersController::class, 'viewpetugas'])->name('tampil.view');
route::delete('/petugas/{id}', [UsersController::class, 'petugasdestroy'])->name('petugas.destroy');