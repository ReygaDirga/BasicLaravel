<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

// default
Route::get('/', function () {
    return view('welcome');
});

// route langsung HTML
Route::get('/html', function(){
    echo "<h1>Hallo, ini adalah route langsung HTML</h1>";
});

// route dengan parameter
Route::get('/user/{nama}', function($nama){
    return "Hallo, nama saya adalah $nama";
});

// redirect route
Route::get('/redirect', function(){
    return redirect('/html');
});

Route::redirect('/redirect2', '/html');

// route group
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function(){
        return "ini adalah dashboard";
    });

    Route::get('/profile', function(){
        return "ini adalah profile";
    });
});

Route::get('/login', function(){
    return view('login');
})->name('login.view');

Route::get('/register', function(){
    return view('register');
})->name('register.view');

Route::post('/register')->name('register.create');

Route::prefix('/product')->group(function(){
    Route::get('/list', function(){
        return "ini adalah list product";
    })->name('product.list');

    Route::get('/detail', function(){
        return "ini adalah detail product";
    })->name('product.detail');

    Route::get('/edit', function(){
        return "ini adalah edit product";
    })->name('product.edit');
});

Route::get('hubungi-kami', function(){
    return "ini adalah halaman contact us";
});

Route::redirect('/contact-us', 'hubungi-kami');

Route::get("/home", function(){
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
    return view("home", compact('students'));
})->name('home');

Route::get('/students/{id}', function($id){
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

    return view("students.detail", compact('data'));
}) -> name('students.detail');

Route::get('/about', [AboutController::class, 'index'])->name('about.view');