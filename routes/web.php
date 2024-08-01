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
Route::get('/jobs/create', function (){
return view('jobs.create');
    });
Route::get('/jobs/{id}', function ($id) {
    
    $job = Job::find($id);
     return view('jobs.show',['job' => $job]);
    
});

Route::post('/jobs', function (){
    request()->validate([
    'title' => ['required' , 'min:3'],
    'salary' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 2
    ]);
    return redirect('/jobs');
});

Route::get('/jobs', function (){
    $jobs = Job::with('employer')->cursorPaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


