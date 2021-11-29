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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="home">
        <img src="/images/home-intro.jpg" alt="">
        <div class="home__content">
            <h1>Welcome to project manager</h1>
            <footer class="home__footer">
                @if (Auth::check() && Auth::user()->is_admin)
                    <a class="btn" href="{{ route('project.index') }}">View projects</a>
                    <a class="btn btn--contrast" href="{{ route('admin.index') }}">Admin</a>
                @elseif (Auth::check())
                    <a class="btn" href="{{ route('project.index') }}">View projects</a>
                @else
                    <a class="btn" href="{{ route('user.login') }}">Go to login page</a>
                @endif
            </footer>
        </div>
    </div>
</body>

</html>
