<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ZNews') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!-- endinject -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body>
    <main class="main-content">

    
        <div class="signUP-admin">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                        <div class="signUP-admin-left signIn-admin-left position-relative">
                            <div class="signUP-overlay">
                                <!-- <img class="svg signupTop" src="{{ asset('assets/img/svg/signuptop.html') }}" alt="img" />
                                <img class="svg signupBottom" src="{{ asset('assets/img/svg/signupbottom.html') }}" alt="img" /> -->
                            </div>

                            <div class="signUP-admin-left__content">
                                <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                                    <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="index.html">a</a>
                                    <span class="text-dark">admin</span>
                                </div>
                                <h1>Bootstrap 4 React Web Application</h1>
                            </div>
                            <!-- End: .signUP-admin-left__content  -->

                            <div class="signUP-admin-left__img">
                                <img class="img-fluid svg" src="{{ asset('assets/img/svg/signupIllustration.svg') }}" alt="img" />
                            </div>
                            <!-- End: .signUP-admin-left__img  -->

                        </div>
                        <!-- End: .signUP-admin-left  -->
                    </div>
                    <!-- End: .col-xl-4  -->
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                        <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                            <div class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                                @yield('page-text')
                            </div><!-- End: .signUp-topbar  -->
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-12">
                                    <div class="edit-profile mt-md-25 mt-0">
                                        @yield('content')
                                        <!-- End: .card -->

                                    </div>
                                    <!-- End: .edit-profile -->
                                </div>
                                <!-- End: .col-xl-5 -->
                            </div>
                        </div>
                        <!-- End: .signUp-admin-right  -->
                    </div>
                    <!-- End: .col-xl-8  -->
                </div>
            </div>
        </div>
        <!-- End: .login-admin  -->

    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>

    <!-- inject:js-->

    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>

    <script src="{{ asset('assets/js/script.min.js') }}"></script>

    <!-- endinject-->
</body>

</html>