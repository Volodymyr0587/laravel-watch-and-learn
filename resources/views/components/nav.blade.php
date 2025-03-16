@php
    $items = [
        'index' => ['route' => route('index'), 'label' => 'Home'],
        'courses' => ['route' => route('courses'), 'label' => 'Courses'],
        'contact' => ['route' => route('contact'), 'label' => 'Contact'],
        'login' => ['route' => route('login'), 'label' => 'Login'],
        'register' => ['route' => route('register'), 'label' => 'Register'],
    ];
@endphp

<nav>
    <ul class="flex gap-8">
        @foreach ($items as $routeName => $item)
            <x-nav-item :href="$item['route']" :active="request()->routeIs($routeName)">
                {{ $item['label'] }}
            </x-nav-item>
        @endforeach
    </ul>
</nav>
