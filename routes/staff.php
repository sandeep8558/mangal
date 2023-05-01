<?php

use Illuminate\Support\Facades\Route;


Route::get('/mystaff', [App\Http\Controllers\StaffController::class, 'staff']);
Route::post('/mystaff/check_batch_session', [App\Http\Controllers\StaffController::class, 'check_batch_session']);
Route::post('/mystaff/update_attendance', [App\Http\Controllers\StaffController::class, 'update_attendance']);
Route::post('/mystaff/table_update', [App\Http\Controllers\StaffController::class, 'table_update']);
Route::get('/mystaff/timetable', [App\Http\Controllers\StaffController::class, 'timetable']);
Route::get('/mystaff/exam', [App\Http\Controllers\StaffController::class, 'exam']);
Route::post('/mystaff/exam/save', [App\Http\Controllers\StaffController::class, 'exam_save']);
Route::get('/mystaff/exam/all', [App\Http\Controllers\StaffController::class, 'exam_all']);
Route::post('/mystaff/exam/delete', [App\Http\Controllers\StaffController::class, 'exam_delete']);
Route::get('/mystaff/result', [App\Http\Controllers\StaffController::class, 'result']);