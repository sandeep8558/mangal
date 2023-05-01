<?php

use Illuminate\Support\Facades\Route;


Route::get('/faculty', [App\Http\Controllers\FacultyController::class, 'faculty']);