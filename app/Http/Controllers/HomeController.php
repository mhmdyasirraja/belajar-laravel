<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "Muhammad Yasir";
        $pekerjaan = "Mahasiswa Informatika";

        return view('home', compact('nama', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        $nama = "Muhammad Yasir";
        $kampus = "Politeknik Negeri Batam";
        $jurusan = "Informatika";

        return view('about', compact('nama', 'kampus', 'jurusan'));
    }
}
