<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @vite(['resources/css/app.css', 'resources\js\app.js'])
    <title>Dott.ssa Anna Difino</title>


</head>

<body class="d-flex flex-column min-vh-100">

    <x-nav />
    <div class="flex-grow-1 box2 pb-5">
        {{ $slot }}
    </div>


    <x-footer />

</body>

</html>
