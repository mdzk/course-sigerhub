<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | Siger Innovation Hub</title>
    <link rel="shortcut icon" href="{{ url('') }}/assets/static/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/auth.css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/compiled/css/iconsax.css" />
    @stack('styles')
</head>

<body>
    <script src="{{ url('') }}/assets/static/js/initTheme.js"></script>
    <div id="auth">
        @yield('content')
    </div>

    @stack('scripts')
</body>

</html>