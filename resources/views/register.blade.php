<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/login.css") }}">
</head>
<body>
    <div class="wrapper d-flex justify-content-center align-center flex-wrap flex-direction-column">
        <div class="outerpanel">
            <div class="loginpanel register">
                <h2 id="login-text">Register</h2>
                <form class="d-flex flex-direction-column" action="/register/create" method="post">
                    @csrf
                    <label for="name">Name:</label>
                    <input class="form-text" type="text" name="name" id="" placeholder="Enter your name here" required>
                    <label for="phonenumber">Phone Number:</label>
                    {{-- Must be validated at the front end --}}
                    <input class="form-text" type="text" name="phonenumber" id="" placeholder="Enter your phonenumber here" required>
                    <label for="">Email:</label>
                    <input class="form-text" type="email" name="email" id="" placeholder="Enter your email here..." required>
                    <label for="">Password:</label>
                    <input class="form-text" type="password" name="password" id="password" placeholder="Enter your password here..." required>
                    <button class="loginbtn" type="submit">Register</button>
                </form>
            </div>
        </div>
        <p id="regtext">Already have an account? <a href=""><span id="register">Login Now!</span></a></p>
    </div>
</body>
</html>