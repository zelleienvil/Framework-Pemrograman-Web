<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $nama = "Zakki Khairul Abdulaziz";
        $kelas = "5B - Informatika";
        $fakultas = "Ilmu Komputer";
        return view('halaman_controller', compact('nama', 'kelas', 'fakultas'));
    }
}
