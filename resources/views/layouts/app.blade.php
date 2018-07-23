<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>تطبيق المخزن</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom_allPages.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @if(Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/logout">تسجيل الخروج</a>
                            </div>
                        </li>
                        @endif
                    </ul>
                    <a href="/aboutUs" class="slogan-text">تواصل معانا</a>
                    <ul class="navbar-nav mr-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الفواتير</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/Bills">سجل الفواتير</a>
                                <a class="dropdown-item" href="/add_Bill_step1">إضافة فاتوره جديده</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الأصناف</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/categories">سجل الأصناف</a>
                                <a class="dropdown-item" href="/add_category">إضافة صنف جديد</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الأعضاء</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/members">سجل الأعضاء</a>
                                <a class="dropdown-item" href="/register">إضافة عضو جديد</a>
                            </div>
                        </li>
                    </ul>
                    <a href="/dashboard" class="slogan-text">لوحة التحكم</a>
                    <img class="img-fluid rounded-circle solgan-img" src="images/563679_169046943289082_1944952273_n.jpg" alt="">
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
