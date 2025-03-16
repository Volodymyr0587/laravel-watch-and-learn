@php
$items = collect(config('watch.nav_items'))->map(function ($item) {
    return [
        'route' => route($item['route']), // Generate URL dynamically
        'label' => $item['label']
    ];
})->reject(
        fn($label, $routeName) => in_array($routeName, ['terms', 'privacy'])
);
@endphp

<nav>
    <ul class="flex gap-8">
        @foreach ($items as $routeName => $item)
            <x-nav.item :href="$item['route']" :active="request()->routeIs($routeName)">
                {{ $item['label'] }}
            </x-nav.item>
        @endforeach
    </ul>
</nav>
