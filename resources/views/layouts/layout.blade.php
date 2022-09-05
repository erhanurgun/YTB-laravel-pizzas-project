<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JiyoooPizza</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">

    @vite([
    'resources/scss/app.scss',
    'resources/scss/main.scss',
    'resources/js/app.js'
    ])
</head>
<body class="antialiased">

@yield('content')

<footer>
    Copyright 2022
    <span class="logo">
        <span class="text">Jiyooo<strong>Pizza</strong></span>
    </span>
</footer>

</body>
</html>
