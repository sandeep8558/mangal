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
            <p class="text-uppercase mb-0 p-3">Student</p>
        </div>

        <ul class="list-group mb-5 rounded-0 accordion p-1" id="accordionExample">
                

            <div class="accordion" id="accordionExample">

                <div class="accordion-item bg-primary">
                    <h2 class="accordion-header" id="headingOne">
                        <a href="/student" class="btn accordion-button collapsed no-caret {{ (request()->is('student')) ? 'bg-primary text-light' : 'bg-light text-dark' }}" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
                            Dashboard
                        </a>
                    </h2>
                </div>

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
