<?php
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Job;




Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function(){
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create',  'create');
//     Route::get('/jobs/{job}','show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}','update');
//     Route::delete('/jobs/{job}',  'destroy');

// });

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
->middleware('auth')
->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])
->middleware('auth')
->can('edit', 'job');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
->middleware('auth')
->can('edit', 'job');

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/login', [SessionController::class, 'destroy']);



