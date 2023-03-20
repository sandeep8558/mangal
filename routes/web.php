<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'welcome']);

Route::get('/notify/{title}/{msg}', [App\Http\Controllers\NotificationController::class, 'sendNotification'])->middleware("administrator");

Auth::routes(['register' => false]);

/* Framework Routes */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/crud', 'App\Http\Controllers\CrudController');
Route::post('/crud/showall', [App\Http\Controllers\CrudController::class, 'showall']);


/* Auth Routes */
Route::group(['middleware'=>['auth']], function(){
});

/* Administrator Routes */
Route::group(['middleware'=>['auth', 'administrator']], function(){
    Route::get('/administrator', [App\Http\Controllers\AdministratorController::class, 'administrator']);
    Route::get('/administrator/settings', [App\Http\Controllers\SettingController::class, 'settings']);

    Route::get('/administrator/bootstrap/accreditation', [App\Http\Controllers\BootstrapController::class, 'accreditation']);
    Route::get('/administrator/bootstrap/branches', [App\Http\Controllers\BootstrapController::class, 'branches']);
    Route::get('/administrator/bootstrap/branch_assets', [App\Http\Controllers\BootstrapController::class, 'branch_assets']);
    Route::get('/administrator/bootstrap/salary_group', [App\Http\Controllers\BootstrapController::class, 'salary_group']);
    Route::get('/administrator/bootstrap/designation', [App\Http\Controllers\BootstrapController::class, 'designation']);
    Route::get('/administrator/bootstrap/classroom_slots', [App\Http\Controllers\BootstrapController::class, 'classroom_slots']);
    Route::get('/administrator/bootstrap/classroom', [App\Http\Controllers\BootstrapController::class, 'classroom']);

    Route::get('/administrator/courses_bootstrap/related_documents', [App\Http\Controllers\CourseBootstrapController::class, 'related_documents']);
    Route::get('/administrator/courses_bootstrap/course_category', [App\Http\Controllers\CourseBootstrapController::class, 'course_category']);
    Route::get('/administrator/courses_bootstrap/courses', [App\Http\Controllers\CourseBootstrapController::class, 'courses']);
    Route::get('/administrator/courses_bootstrap/course_subjects', [App\Http\Controllers\CourseBootstrapController::class, 'course_subjects']);
    Route::get('/administrator/courses_bootstrap/course_fees', [App\Http\Controllers\CourseBootstrapController::class, 'course_fees']);
    Route::get('/administrator/courses_bootstrap/course_documents', [App\Http\Controllers\CourseBootstrapController::class, 'course_documents']);
    Route::get('/administrator/courses_bootstrap/course_sections', [App\Http\Controllers\CourseBootstrapController::class, 'course_sections']);
    Route::get('/administrator/courses_bootstrap/course_material', [App\Http\Controllers\CourseBootstrapController::class, 'course_material']);

    Route::get('/administrator/employee_manager/staff_manager', [App\Http\Controllers\EmployeeManagerController::class, 'staff_manager']);
    Route::get('/administrator/employee_manager/staff_documents', [App\Http\Controllers\EmployeeManagerController::class, 'staff_documents']);
    Route::get('/administrator/employee_manager/designation_history', [App\Http\Controllers\EmployeeManagerController::class, 'designation_history']);
    Route::get('/administrator/employee_manager/branch_history', [App\Http\Controllers\EmployeeManagerController::class, 'branch_history']);
    Route::get('/administrator/employee_manager/salary_history', [App\Http\Controllers\EmployeeManagerController::class, 'salary_history']);
    Route::get('/administrator/employee_manager/reviews', [App\Http\Controllers\EmployeeManagerController::class, 'reviews']);

    Route::get('/administrator/student_manager/students', [App\Http\Controllers\StudentManagerController::class, 'students']);
    Route::get('/administrator/student_manager/student_education', [App\Http\Controllers\StudentManagerController::class, 'student_education']);
    Route::get('/administrator/student_manager/student_qualification', [App\Http\Controllers\StudentManagerController::class, 'student_qualification']);
    Route::get('/administrator/student_manager/student_employment', [App\Http\Controllers\StudentManagerController::class, 'student_employment']);
    Route::get('/administrator/student_manager/student_courses', [App\Http\Controllers\StudentManagerController::class, 'student_courses']);
    Route::get('/administrator/student_manager/student_course_documents', [App\Http\Controllers\StudentManagerController::class, 'student_course_documents']);
    Route::post('/administrator/student_manager/get_fee', [App\Http\Controllers\StudentManagerController::class, 'get_fee']);

    Route::get('/administrator/batch_manager/batches', [App\Http\Controllers\BatchManagerController::class, 'batches']);
    Route::get('/administrator/batch_manager/batch_faculties', [App\Http\Controllers\BatchManagerController::class, 'batch_faculties']);
    Route::get('/administrator/batch_manager/batch_students', [App\Http\Controllers\BatchManagerController::class, 'batch_students']);
    Route::get('/administrator/batch_manager/batch_sessions', [App\Http\Controllers\BatchManagerController::class, 'batch_sessions']);
    Route::get('/administrator/batch_manager/session_attendance', [App\Http\Controllers\BatchManagerController::class, 'session_attendance']);

});

/* Customer Routes */
Route::group(['middleware'=>['auth', 'customer']], function(){
    Route::get('/customer', [App\Http\Controllers\WebsiteController::class, 'welcome']);
});