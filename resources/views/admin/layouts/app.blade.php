<!DOCTYPE html>
<html lang="en" data-sidebar-color="light" data-topbar-color="light" data-sidebar-view="default">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="app/images/favicon.ico.png">

    <!-- App css -->
    <link href="{{ asset('app/css/theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('app/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">

    <!-- Head Js -->
    <script src="{{ asset('app/js/head.js') }}"></script>
</head>

<body>

    <div class="app-wrapper">

        <!-- Sidebar Menu Start -->
        <div class="app-menu">

            <!-- Brand Logo -->
            <a class='logo-box' href='#'>
                <img src="app/images/logo-light.png" class="logo-light h-6" alt="Light logo">
                <img src="{{ asset('assets/images/logo/logo-dark.png') }}" class="logo-dark h-6" alt="Dark logo">
            </a>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="menu">
                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a class='menu-link' href={{ route('dashboard') }}>
                            <span class="menu-icon"><i class="uil uil-estate"></i></span>
                            <span class="menu-text"> Dashboard </span>
                            <span class="badge bg-primary rounded ms-auto">01</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class='menu-link' href={{ route('shipments') }}>
                            <span class="menu-icon"><i class="uil uil-ship"></i></span>
                            <span class="menu-text"> Shipments </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <form action="{{ route('logout') }}" method="post" class="">
                            @csrf
                            <button class="menu-link">
                                <span
                                    class="menu-icon"><i class="uil uil-signout"></i></span><span class="menu-text"> Logout
                                </span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Sidebar Menu End  -->

        <!-- Start Page Content here -->
        <div class="app-content">
            <!-- Topbar Start -->
            <header class="app-header flex items-center px-5 gap-4">

                <!-- Brand Logo -->
                <a class='logo-box' href='#'>
                    <img src="{{ asset('assets/images/logo/logo-dark.png') }}" class="h-6" alt="Small logo">
                </a>

                <!-- Sidenav Menu Toggle Button -->
                <button id="button-toggle-menu" class="nav-link p-2">
                    <span class="sr-only">Menu Toggle Button</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="uil uil-bars text-2xl"></i>
                    </span>
                </button>

                <!-- Page Title -->
                <h4 class="text-slate-900 text-lg font-medium">Dashboard</h4>

                <button id="button-toggle-profile" class="nav-link p-2 ms-auto">
                    <span class="sr-only">Profile Menu Offcanvas Button</span>
                    <span class="flex items-center justify-center h-6 w-6">
                        <i class="uil uil-heart-rate text-2xl"></i>
                    </span>
                </button>
            </header>
            <!-- Topbar End -->

            @yield('content')
            <!-- Footer Start -->
            <footer class="footer h-16 flex items-center px-6 border-t border-gray-200 mt-auto">
                <div class="flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <p class="text-sm font-medium">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © {{config('app.name')}}
                        </p>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Page content -->

        <div id="search-modal"
            class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                <div class="flex flex-col bg-white shadow-sm rounded-xl pointer-events-auto overflow-hidden">
                    <div class="relative z-[60]">
                        <input type="search" id="search-input" class="form-input ps-10">
                        <span class="absolute start-3 top-1.5">
                            <i class="uil uil-search text-lg"></i>
                        </span>

                        <span class="absolute end-3 top-1.5">
                            <button data-hs-overlay="#search-modal">
                                <i class="uil uil-times text-lg"></i>
                            </button>
                        </span>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Plugin Js -->
    <script src="app/libs/jquery/jquery.min.js"></script>
    <script src="app/libs/simplebar/simplebar.min.js"></script>
    <script src="app/libs/node-waves/waves.min.js"></script>
    <script src="app/libs/preline/preline.js"></script>

    <!-- App Js -->
    <script src="{{ asset('app/js/app.js') }}"></script>

    <!-- Apexcharts js -->
    <script src="{{ asset('app/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Knob charts js -->
    <script src="{{ asset('app/libs/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Morris Js-->
    <script src="{{ asset('app/libs/morris.js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('app/libs/raphael/raphael.min.js') }}"></script>

    <!-- Dashboard Project Page js -->
    <script src="{{ asset('app/js/pages/dashboard.js') }}"></script>

</body>

</html>
