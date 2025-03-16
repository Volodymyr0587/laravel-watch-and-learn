@php
$items = collect(config('watch.nav_items'))->map(function ($item) {
    return [
        'route' => route($item['route']), // Generate URL dynamically
        'label' => $item['label']
    ];
})->reject(
        fn($label, $routeName) => in_array($routeName, ['login', 'register'])
);
@endphp

<ul class="flex gap-4">
    @foreach ($items as $item)
    <x-footer.nav-item :href="$item['route']">
        {{ $item['label'] }}
    </x-footer.nav-item>
    @endforeach
</ul>
