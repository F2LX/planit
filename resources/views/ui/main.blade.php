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
   
</head>
<body>
    <nav class="d-flex main-nav justify-space-between align-center">
        <div class="title">
                <img src="{{ asset("img/logo.png") }}" alt="">
         </div>
            <ul class="d-inline text-right d-flex align-center">
                <li>Home</li>
                <li>Products</li>
                <li>About Us</li>
                <li><a href="" class="btn btn-nav d-flex align-center"><span class="material-symbols-outlined">
                    account_circle
                    </span><span class="ml-2">Login</span></a></li>
            </ul>
    </nav>
    @include('ui.preloader')
    <div>
        @yield("content")
    </div>

    <script src="{{ asset("js/preloader.js") }}"></script> 
</body>
</html>