<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

<div id="menu" class="menu bg-light">
    <div class="menu-container">
        <div class="container p-0 bg-dark text-light">
            <p class="text-uppercase mb-0 p-3">ADMINISTRATOR</p>
        </div>

        <ul class="list-group mb-5 rounded-0 accordion p-1" id="accordionExample">
                

            <div class="accordion" id="accordionExample">

                <div class="accordion-item bg-primary">
                    <h2 class="accordion-header" id="headingOne">
                        <a href="/administrator" class="btn accordion-button collapsed no-caret {{ (request()->is('administrator')) ? 'bg-primary text-light' : 'bg-light text-dark' }}" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Dashboard
                        </a>
                    </h2>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBootstrap">
                        <button class="accordion-button {{ (request()->is('administrator/bootstrap*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBootstrap" aria-expanded="false" aria-controls="collapseBootstrap">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Bootstrap
                        </button>
                    </h2>
                    <div id="collapseBootstrap" class="accordion-collapse collapse {{ (request()->is('administrator/bootstrap*')) ? 'show' : '' }}" aria-labelledby="headingBootstrap" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/accreditation')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/accreditation">Accreditation Manager</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/branches')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/branches">Branches</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/branch_assets')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/branch_assets">Branch Assets</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/salary_group')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/salary_group">Salary Group</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/designation')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/designation">Designation</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/classroom_slots')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/classroom_slots">Classroom Slots</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/bootstrap/classroom')) ? 'fw-bold' : '' }}" href="/administrator/bootstrap/classroom">Classroom</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCoursesBootstrap">
                        <button class="accordion-button {{ (request()->is('administrator/courses_bootstrap*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCoursesBootstrap" aria-expanded="false" aria-controls="collapseCoursesBootstrap">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Courses Bootstrap
                        </button>
                    </h2>
                    <div id="collapseCoursesBootstrap" class="accordion-collapse collapse {{ (request()->is('administrator/courses_bootstrap*')) ? 'show' : '' }}" aria-labelledby="headingCoursesBootstrap" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/related_documents')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/related_documents">Related Documents</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/material')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/material">Material</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_material_purchase')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_material_purchase">Material Purcase</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_category')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_category">Course Category</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/courses')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/courses">Courses</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_subjects')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_subjects">Course Subjects</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_fees')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_fees">Course Fees</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_documents')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_documents">Course Documents</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_sections')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_sections">Course Sections</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/courses_bootstrap/course_material')) ? 'fw-bold' : '' }}" href="/administrator/courses_bootstrap/course_material">Course Material</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEmployeeManager">
                        <button class="accordion-button {{ (request()->is('administrator/employee_manager*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEmployeeManager" aria-expanded="false" aria-controls="collapseEmployeeManager">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Employee Manager
                        </button>
                    </h2>
                    <div id="collapseEmployeeManager" class="accordion-collapse collapse {{ (request()->is('administrator/employee_manager*')) ? 'show' : '' }}" aria-labelledby="headingEmployeeManager" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/employee_manager/staff_manager')) ? 'fw-bold' : '' }}" href="/administrator/employee_manager/staff_manager">Staff Manager</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/employee_manager/staff_documents')) ? 'fw-bold' : '' }}" href="/administrator/employee_manager/staff_documents">Staff Documents</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/employee_manager/designation_history')) ? 'fw-bold' : '' }}" href="/administrator/employee_manager/designation_history">Designation History</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/employee_manager/branch_history')) ? 'fw-bold' : '' }}" href="/administrator/employee_manager/branch_history">Branch History</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/employee_manager/salary_history')) ? 'fw-bold' : '' }}" href="/administrator/employee_manager/salary_history">Salary History</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/employee_manager/reviews')) ? 'fw-bold' : '' }}" href="/administrator/employee_manager/reviews">Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingStudentManager">
                        <button class="accordion-button {{ (request()->is('administrator/student_manager*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStudentManager" aria-expanded="false" aria-controls="collapseStudentManager">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Students Manager
                        </button>
                    </h2>
                    <div id="collapseStudentManager" class="accordion-collapse collapse {{ (request()->is('administrator/student_manager*')) ? 'show' : '' }}" aria-labelledby="headingStudentManager" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/student_manager/students')) ? 'fw-bold' : '' }}" href="/administrator/student_manager/students">Students</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/student_manager/student_education')) ? 'fw-bold' : '' }}" href="/administrator/student_manager/student_education">Student Education</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/student_manager/student_qualification')) ? 'fw-bold' : '' }}" href="/administrator/student_manager/student_qualification">Student Qualification</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/student_manager/student_employment')) ? 'fw-bold' : '' }}" href="/administrator/student_manager/student_employment">Student Employment</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/student_manager/student_courses')) ? 'fw-bold' : '' }}" href="/administrator/student_manager/student_courses">Student Courses</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/student_manager/student_course_documents')) ? 'fw-bold' : '' }}" href="/administrator/student_manager/student_course_documents">Course Documents</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBatchManager">
                        <button class="accordion-button {{ (request()->is('administrator/batch_manager*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBatchManager" aria-expanded="false" aria-controls="collapseBatchManager">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Batch Manager
                        </button>
                    </h2>
                    <div id="collapseBatchManager" class="accordion-collapse collapse {{ (request()->is('administrator/batch_manager*')) ? 'show' : '' }}" aria-labelledby="headingBatchManager" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/batch_manager/batches')) ? 'fw-bold' : '' }}" href="/administrator/batch_manager/batches">Batches</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/batch_manager/batch_courses')) ? 'fw-bold' : '' }}" href="/administrator/batch_manager/batch_courses">Batch Courses</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/batch_manager/batch_faculties')) ? 'fw-bold' : '' }}" href="/administrator/batch_manager/batch_faculties">Batch Faculty</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/batch_manager/batch_students')) ? 'fw-bold' : '' }}" href="/administrator/batch_manager/batch_students">Batch Students</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingExamAndResults">
                        <button class="accordion-button {{ (request()->is('administrator/exam_result_manager*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExamAndResults" aria-expanded="false" aria-controls="collapseExamAndResults">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Exam & Results
                        </button>
                    </h2>
                    <div id="collapseExamAndResults" class="accordion-collapse collapse {{ (request()->is('administrator/exam_result_manager*')) ? 'show' : '' }}" aria-labelledby="headingExamAndResults" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/exam_result_manager/exam')) ? 'fw-bold' : '' }}" href="/administrator/exam_result_manager/exam">Exam Manager</a></li>
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/exam_result_manager/result')) ? 'fw-bold' : '' }}" href="/administrator/exam_result_manager/result">Result Manager</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFeesAndCollection">
                        <button class="accordion-button {{ (request()->is('administrator/staff_manager*')) ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFeesAndCollection" aria-expanded="false" aria-controls="collapseFeesAndCollection">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Fees & Collection
                        </button>
                    </h2>
                    <div id="collapseFeesAndCollection" class="accordion-collapse collapse {{ (request()->is('administrator/staff_manager*')) ? 'show' : '' }}" aria-labelledby="headingFeesAndCollection" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush d-grid p-0">
                                <li class="list-group-item"><a class="btn btn-default btn-sm btn-full border-0 {{ (request()->is('administrator/staff_manager/accreditation')) ? 'fw-bold' : '' }}" href="/administrator/staff_manager/accreditation">Accreditation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item bg-primary">
                    <h2 class="accordion-header" id="headingOne">
                        <a href="/administrator/user_manager" class="btn accordion-button collapsed no-caret {{ (request()->is('administrator/user_manager')) ? 'bg-primary text-light' : 'bg-light text-dark' }}" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            User Manager
                        </a>
                    </h2>
                </div>


                <div class="accordion-item bg-primary">
                    <h2 class="accordion-header" id="headingOne">
                        <a href="/administrator/settings" class="btn accordion-button collapsed no-caret {{ (request()->is('administrator/settings')) ? 'bg-primary text-light' : 'bg-light text-dark' }}" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Settings
                        </a>
                    </h2>
                </div>

                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush bg-light d-grid p-0">
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/3">Construction</a></li>
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/1">English</a></li>
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/2">Marathi</a></li>
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/53">Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush bg-light d-grid p-0">
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/3">Construction</a></li>
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/1">English</a></li>
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/2">Marathi</a></li>
                                <li class="list-group-item" style="background: transparent !important;"><a class="btn btn-sm btn-default btn-full border-0" href="/course/53">Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->

            </div>

        </ul>


    </div>
</div>

<div id="panel" class="panel">
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase" id="handel" href="javascript:void(0);"><i class="fas fa-bars fa-lg fa-fw"></i> {{Auth::user()->name}}</a>
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="/">Website</a>
                </li> -->
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

</div>



</div>

@include('sweetalert::alert')

</body>
</html>
