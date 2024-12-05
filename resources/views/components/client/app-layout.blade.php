<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('splide/dist/css/splide.min.css') }}">

    @vite('resources/css/app.css')
    <title>{{ config("app.name") }} | {{ $title }}</title>
</head>

<body class="font-montserrat" id="body">

    <x-client-navbar />

    {{ $slot }}

    <script src="{{ asset('splide/dist/js/splide.min.js') }}"></script>
    @stack('js')
</body>

</html>
