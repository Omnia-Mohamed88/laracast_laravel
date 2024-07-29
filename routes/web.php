<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['title' => 'Director', 'salary' => '$50,000', 'id' => 1],
        ['title' => 'Fullstack', 'salary' => '$60,000', 'id' => 2],
        ['title' => 'Teacher', 'salary' => '$2,000', 'id' => 3],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    if ($job) {
return view('job' , ['job' => $job]);
    } else {
        abort(404, 'Job not found');
    }
    
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['title' => 'Director', 'salary' => '$50,000', 'id' => 1],
            ['title' => 'Fullstack', 'salary' => '$60,000', 'id' => 2],
            ['title' => 'Teacher', 'salary' => '$2,000', 'id' => 3],
        ]
    ]);
});
