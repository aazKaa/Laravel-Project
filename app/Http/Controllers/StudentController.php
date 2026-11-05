<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Students";
        $search = "Search student...";
        $addStudent = "Add Student";

        $students = Student::all();
        // [
        //     [
        //         'nis' => '1001',
        //         'name' => 'Ahmad Rizky',
        //         'classroom' => 'X RPL 1',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1002',
        //         'name' => 'Budi Santoso',
        //         'classroom' => 'X RPL 1',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1003',
        //         'name' => 'Citra Lestari',
        //         'classroom' => 'X RPL 2',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1004',
        //         'name' => 'Dewi Anggraini',
        //         'classroom' => 'XI RPL 1',
        //         'major' => 'RPL',
        //         'status' => 'Tidak Aktif',
        //     ],
        //     [
        //         'nis' => '1005',
        //         'name' => 'Eko Prasetyo',
        //         'classroom' => 'XI RPL 1',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1006',
        //         'name' => 'Fajar Nugraha',
        //         'classroom' => 'XI RPL 2',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1007',
        //         'name' => 'Gita Gutawa',
        //         'classroom' => 'XII RPL 1',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1008',
        //         'name' => 'Hendra Setiawan',
        //         'classroom' => 'XII RPL 1',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        //     [
        //         'nis' => '1009',
        //         'name' => 'Indah Permata',
        //         'classroom' => 'XII RPL 2',
        //         'major' => 'RPL',
        //         'status' => 'Tidak Aktif',
        //     ],
        //     [
        //         'nis' => '1010',
        //         'name' => 'Joko Widodo',
        //         'classroom' => 'XII RPL 2',
        //         'major' => 'RPL',
        //         'status' => 'Aktif',
        //     ],
        // ];

        return view(
            'admin.students',
            compact(
                'title',
                'search',
                'addStudent',
                'students'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
