<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/back/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/back/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="auth">
            <main id="main" class="d-flex justify-content-center align-items-center">
                <div class="login-register">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        const submitBtn = document.getElementById('submit-btn');
        const loginForm = document.getElementById('login-form');

        submitBtn.addEventListener('click', function(event) {
            event.preventDefault();
        });
    </script>

</body>
</html>
