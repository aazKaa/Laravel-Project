<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard page.
     */
    public function index()
    {
        $title = 'Dashboard';
        $content = 'Selamat datang di halaman Dashboard Admin.';

        return view('admin.dashboard', compact('title', 'content'));
    }
}
