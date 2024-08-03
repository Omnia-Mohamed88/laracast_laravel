<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;


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



Route::view('/','home');

Route::view('/contact','contact');
// Route::controller(JobController::class)->group(function(){
// Route::get('/jobs/create', 'create');
// Route::post('/jobs',  'store');

// Route::get('/jobs/{job}',  'show');
// Route::get('/jobs/{job}/edit', 'edit');
// Route::patch('/jobs/{job}','update');
// Route::delete('/jobs/{job}','destroy');

// Route::get('/jobs',  'index');
// });

Route::resource('jobs',JobController::class);
Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);
Route::get('/login',[SessionController::class, 'create']);
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
