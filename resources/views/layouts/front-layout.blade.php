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
    <h2 class="top-bar__title">serii@mail.ru</h2>
    <a class="btn btn--danger" href="{{ route('user.logout') }}">Logout</a>
</div>
<main class="main">
    <div class="container">
        @yield('content')
    </div>
</main>
</body>

</html>
