<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create' , [StudentController::class , 'create'])->name('createstudent');
Route::post('/store' , [StudentController::class , 'store'])->name("storestudent");
