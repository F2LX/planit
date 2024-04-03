<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    {{-- Preconnect Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    {{-- Preconnect Google Icons --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    {{-- Import Animation CSS --}}
    <link rel="stylesheet" href="{{ asset("css/animation.css") }}">

    {{-- Import Preloader CSS --}}
    <link rel="stylesheet" href="{{ asset("css/preloader.css") }}">

    {{-- Mobile CSS --}}
    <link rel="stylesheet" href="{{ asset("css/mobile.css") }}">

    <title>User Area - Plan It</title>
</head>
<body class="dashboard">

    <div class="wrapper d-flex">
        <div class="menu-padding"></div>
        <div class="menu">
            <h2>User Area</h2>
            <ul class="menu-nav">
                <li class="{{ request()->is('user') ? 'active' : '' }}">
                    <a href="/user" class="nav-link d-flex align-center flex-direction-row">
                        <span class="material-symbols-outlined">home</span>
                        <span class="nav-text">Home</span>
                    </a>
                </li>
                <li class="{{ request()->is('user/order') ? 'active' : '' }}">
                    <a href="/user/order" class="nav-link d-flex align-center flex-direction-row">
                        <span class="material-symbols-outlined">description</span>
                        <span class="nav-text">Order Summary</span>
                    </a>
                </li>
                <li class="{{ request()->is('user/profile') ? 'active' : '' }}">
                    <a href="/user/profile" class="nav-link d-flex align-center flex-direction-row">
                        <span class="material-symbols-outlined">account_balance_wallet</span>
                        <span class="nav-text">Wallet</span>
                    </a>
                </li>
                <li class="{{ request()->is('user/support') ? 'active' : '' }}">
                    <a href="/user/support" class="nav-link d-flex align-center flex-direction-row">
                        <span class="material-symbols-outlined">contact_support</span>
                        <span class="nav-text">Contact Support</span>
                    </a>
                </li>
            </ul>
        </div>
        @include('ui.preloader')
        <div class="content p-5">
            <button class="btn btn-minimize" id="dashboardMinimize"><span class="material-symbols-outlined">
                menu
                </span></button>
            @yield('content')
        </div>
    </div>
    

    <script src="{{ asset("js/preloader.js") }}"></script>
    <script src="{{ asset("js/dashboard.js") }}"></script>
    <script src="{{ asset("js/pay.js")}}"></script>
</body>
</html>