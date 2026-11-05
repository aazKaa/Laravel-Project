<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page.
     */
    public function index()
    {
        $title = 'About';

        $name = 'Muhammad Azka Wijaya';
        $hobby = 'Music';
        $account = 'aazKaa (GitHub)';

        return view('admin.about', compact(
            'title',
            'name',
            'hobby',
            'account'
        ));
    }
}
