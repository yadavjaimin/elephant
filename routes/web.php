<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Models\student;

Route::get('welcome', function () {
    return view('welcome');
});


//use group middleware in user rout
Route::view('user1','user1')->middleware('check1');


//-> name(user) use to create sort path ex; name(short name of your path)
Route::view('laravel/user/login','name-rout')->name('user');

// Route::view('laravel/user/{name}','name-rout')->name('employes');


Route::view('userdb','userData');

// Route::view('student','students');
Route::get('userdata',[usercontroller::class,'userdata']);

Route::get('employe',[usercontroller::class,'employes']);

Route::get('show',[usercontroller::class,'show']);
// Route::get('employe',[usercontroller::class,'employe']);

Route::get('/getstudent',[usercontroller::class,'getstudent']);

Route::view('getdata','gethttp');
Route::get('/gethttp',[usercontroller::class,'gethttp']);