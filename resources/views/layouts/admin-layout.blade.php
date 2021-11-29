<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" />
    <title>Document</title>
</head>

<body>
    <main class="admin-layout">
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
        <div class="admin-layout__wrap">
            <div class="admin-layout__sidebar">
                <ul class="sidebar-list">
                    <li>
                        <a class="btn btn--danger" href="{{ route('user.logout') }}">Logout</a>
                    </li>
                    <li>
                        <a class="btn btn--success" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('projects.index') }}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('columns.index') }}">Columns</a>
                    </li>
                </ul>
            </div>
            <div class="admin-layout__content">
                @yield('content')
            </div>
        </div>
    </main>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js"></script>
    <script>
        if (document.querySelector('.color-picker')) {
            const colorInput = document.querySelector('#js-color');

            const pickr = Pickr.create({
                el: '.color-picker',
                theme: 'classic', // or 'monolith', or 'nano'
                default: colorInput.value,
                components: {
                    preview: true,
                    opacity: true,
                    hue: true,
                    interaction: {
                        hex: true,
                        rgba: true,
                        hsla: false,
                        hsva: false,
                        cmyk: false,
                        input: true,
                        clear: true,
                        save: true
                    }
                }
            });
            pickr.on('change', (...args) => {
                let color = args[0].toRGBA();
                colorInput.value = "";
                colorInput.value = `${color}`;
            });
        }
    </script>
    <script src="/js/app.js"></script>
</body>

</html>
