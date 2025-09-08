<?php

use Illuminate\Support\Facades\Route;

Route::get('/halaman-route', function () {
    $nama = "Zakki Khairul Abdulaziz";
    $kelas = "5B - Informatika";
    $fakultas = "Ilmu Komputer";
    return view('halaman_route', compact('nama', 'kelas', 'fakultas'));
});

use App\Http\Controllers\UserController;
Route::get('/halaman-controller', [UserController::class, 'index']);