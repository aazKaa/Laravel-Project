<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        $title = 'About Me';
        $nama = 'Nama : Muhammad Hifni Bika Nashif';
        $kelas = 'Kelas : XI PPLG 2';
        $hobby = 'Hobby : football';
        $repository = 'Akun repository :';

        return view('admin.about', [
            'title' => $title,
            'nama' => $nama,
            'kelas' => $kelas,
            'hobby' => $hobby,
            'repository' => $repository,
        ]);
    }
}
