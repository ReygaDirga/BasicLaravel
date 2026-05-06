<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function detail($id){
        $students=[
            [
                'id' => 1,
                'name' => 'Tony',
                'Score' => [90, 96, 89]
            ],
            [
                'id' => 2,
                'name' => 'Steve',
                'Score' => [87, 75, 67]
            ],
            [
                'id' => 3,
                'name' => 'Peter',
                'Score' => [55, 60, 64]
            ]
        ];
        $data = collect($students)->firstWhere('id', $id);
        return view('students.detail', compact('data'));
    }
}
