<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Http\Request;


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
    // return view('home');
    $jobs = Job::all();
    dd($jobs[0]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    
    $job = Job::find($id);
     return view('job',['job' => $job]);
    
});

Route::get('/jobs', function (){
    $jobs = Job::with('employer')->cursorPaginate(3);
    return view('jobs', [
        'jobs' => $jobs
    ]);
});
