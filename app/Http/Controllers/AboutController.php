<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About Me';
        $nama = 'Nama : Muhammad Azka Wijaya';
        $kelas = 'Kelas : XI PPLG 1';
        $hobby = 'Hobby : Music';
        $repository = 'Akun repository : aazKaa';

        return view('admin.about', [
            'title' => $title,
            'nama' => $nama,
            'kelas' => $kelas,
            'hobby' => $hobby,
            'repository' => $repository,
        ]);
    }
}
