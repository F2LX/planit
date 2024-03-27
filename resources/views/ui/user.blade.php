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
    <script src="{{ asset("js/popUp.js") }}"></script>
    
    {{-- Import Animation CSS --}}
    <link rel="stylesheet" href="{{ asset("css/animation.css") }}">

    <title>User Area - Plan It</title>
</head>
<body class="dashboard">

    <div class="wrapper d-flex">
        <div class="menu">
            <h2>User Area</h2>
            <ul class="menu-nav">
                <li><a href="" class="d-flex align-center flex-direction-row"><span class="material-symbols-outlined">home</span>Home</a></li>
                <li><a href="" class="d-flex align-center flex-direction-row"><span class="material-symbols-outlined">description</span>Order Summary</a></li>
                <li><a href="" class="d-flex align-center flex-direction-row"><span class="material-symbols-outlined">account_balance_wallet</span>Wallet</a></li>
                <li><a href="" class="d-flex align-center flex-direction-row"><span class="material-symbols-outlined">contact_support</span>Contact Support</a></li>
            </ul>
        </div>
        <div class="content p-5">
            @yield('content')
        </div>
    </div>
    
</body>
</html>