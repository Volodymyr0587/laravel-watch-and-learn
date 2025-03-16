<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <title>{{ config('app.name') }}</title>
    </head>

    <body class="flex flex-col h-screen">
        <x-header />

        <main class="flex-grow grid place-items-center font-black">
            {{ $slot }}
        </main>

        <x-footer />
    </body>

</html>
