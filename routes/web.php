<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;


Route::get('/', function () {
   
    return view('home');

});
Route::get('/home', function () {
   
    return view('home');

});
//index
Route::get('/jobs', function ()  {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index',[
         'jobs' => $jobs
    ]);
});
//create
Route::get('/jobs/create', function(){
    return view('jobs.create');
});


//show
Route::get('/jobs/{job}', function (Job $job) {
      
   return view('jobs.show', ['job' => $job]);
});
//store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']

    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});
//edit
Route::get('/jobs/{job}/edit', function ( Job $job) {
         
     return view('jobs.edit', ['job' => $job]);
 });
 //update
 Route::patch('/jobs/{job}', function (Job $job) {
      //validate
      request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']

    ]);
    //authorization



    $job->update([
        'title' =>request('title'),
        'salary' =>request('salary')
    ]);

    return redirect('/jobs/' . $job->$job);
    
  
 });
//destroy
 Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();

    return redirect('/jobs');
      
 });

Route::get('/contact', function () {
    
    return view('contact');
});



