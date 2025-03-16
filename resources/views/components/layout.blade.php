@php
$navItems = collect([
    'index' => ['route' => route('index'), 'label' => 'Home'],
    'courses' => ['route' => route('courses'), 'label' => 'Courses'],
    'contact' => ['route' => route('contact'), 'label' => 'Contact'],
    'terms' => ['route' => route('terms'), 'label' => 'Terms'],
    'privacy' => ['route' => route('privacy'), 'label' => 'Privacy'],
    'login' => ['route' => route('login'), 'label' => 'Login'],
    'register' => ['route' => route('register'), 'label' => 'Register'],
]);
@endphp

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

    <body>
        <x-header :$navItems />

        <main class="h-screen grid place-items-center text-7xl font-bold">
            {{ $slot }}
        </main>

        <x-footer :$navItems />
    </body>

</html>
