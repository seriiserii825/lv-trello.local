<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="home">
            <img src="/images/home-intro.jpg" alt="">
            <div class="home__content">
                <h1>Welcome to project manager</h1>
                <a class="btn" href="{{ route('user.login') }}">Go to login page</a>
            </div>
        </div>
    </body>
</html>
