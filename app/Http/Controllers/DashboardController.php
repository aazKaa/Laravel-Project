<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $content = 'Welcome to the admin dashboard!';

        return view('admin.dashboard', [
            'title' => $title,
            'content' => $content,
        ]);
    }
}
