<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>
    <div class="top-bar">
        <h2 class="top-bar__title">
            {{-- @if ($user_email)
                {{ $user_email }}
            @endif --}}
        </h2>
        <ul class="top-bar__list">
            @if (Auth::user()->is_admin)
                <li>
                    <a class="btn btn--conrast" href="{{ route('admin.index') }}">Admin</a>
                </li>
            @endif
            <li>
                <a class="btn btn--danger" href="{{ route('user.logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    @yield('content')
</body>

</html>
