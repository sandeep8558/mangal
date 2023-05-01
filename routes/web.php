<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'welcome']);

Route::get('/notify/{title}/{msg}', [App\Http\Controllers\NotificationController::class, 'sendNotification'])->middleware("administrator");

Auth::routes(['register' => false]);

/* Old CRUD Framework Routes */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/crud', 'App\Http\Controllers\CrudController');
Route::post('/crud/showall', [App\Http\Controllers\CrudController::class, 'showall']);

/* New CRUD Routes */
Route::post('/crud/get/grid', [App\Http\Controllers\NewCrudController::class, 'grid']);
Route::post('/crud/store', [App\Http\Controllers\NewCrudController::class, 'store']);
Route::post('/crud/delete', [App\Http\Controllers\NewCrudController::class, 'delete']);
Route::post('/crud/fetch', [App\Http\Controllers\NewCrudController::class, 'fetch']);


/* Auth Routes */
Route::group(['middleware'=>['auth']], function(){
});
/* Auth Routes End Here */