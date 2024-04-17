<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Plan It</title>

    {{-- Import Preloader CSS --}}
    <link rel="stylesheet" href="{{ asset("css/preloader.css") }}">

    {{-- Import Mobile CSS --}}
    <link rel="stylesheet" href="{{ asset("css/mobile.css") }}">

    @if(request()->is('/'))
        <link rel="stylesheet" href="{{ asset("css/home.css") }}">
    @endif

    {{-- If request->is('list') --}}
    @if (request()->is('list'))
        <link rel="stylesheet" href="{{ asset("css/list.css") }}">
    @endif
   
</head>
<body>
    <nav class="d-flex main-nav justify-space-between align-center">
        <div class="title">
                <img src="{{ asset("img/logo.png") }}" alt="">
         </div>
            <ul class="d-inline text-right d-flex align-center">
                <li><a href="/">Home</a></li>
                <li><a href="/list">Vendors</a></li>
                <li><a href="/register">Register</a></li>

                @if(!auth()->user())
                <li><a href="/login" class="btn btn-nav d-flex align-center"><span class="material-symbols-outlined">
                    account_circle
                    </span><span class="ml-2">Login</span></a></li>
                @else
                    
                <li><a href="/user/profile" class="btn btn-nav d-flex align-center"><span class="material-symbols-outlined">
                    account_circle
                    </span><span class="ml-2">Profile</span></a></li>

                @endif
            </ul>
    </nav>
    @include('ui.preloader')
    <div class="main-content-wrap">
        @if(!request()->is("/"))
        <div class="nav-padding"></div>
        @endif
        @yield("content")
    </div>

    <script src="{{ asset("js/preloader.js") }}"></script> 
</body>
</html>