<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Adrian Nicholas L | Portfolio')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ secure_asset('assets/images/logo.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    @yield('content')

    <!-- JS -->
    <script src="{{ secure_asset('assets/js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>