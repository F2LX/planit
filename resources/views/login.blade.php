<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/animation.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
</head>
<body>
    <div class="wrapper d-flex justify-content-center align-center flex-wrap flex-direction-column">
        <div class="outerpanel">
            <div class="loginpanel">
                <h2 id="login-text">Login</h2>
                <form class=" d-flex flex-direction-column" action="/login/validate" method="post">
                    @csrf
                    <label for="">Email:</label>
                    <input class="form-text" type="email" name="email" id="" placeholder="Enter your email here...">
                    <label for="">Password:</label>
                    <input class="form-text" type="password" name="password" id="" placeholder="Enter your password here...">
                    <button class="loginbtn" type="submit">Login</button>
                </form>
            </div>
        </div>
        <p id="regtext">Don't have an account? <a href="/register"><span id="register">Register Now!</span></a></p>
    </div>
</body>
</html>