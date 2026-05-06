<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
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

        return view('home', compact('students'));
    }
}
