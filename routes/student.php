<?php

use Illuminate\Support\Facades\Route;


Route::get('/student', [App\Http\Controllers\StudentController::class, 'student']);