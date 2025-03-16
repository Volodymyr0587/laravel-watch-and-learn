@php
$items = [
    'index' => ['route' => route('index'), 'label' => 'Home'],
    'courses' => ['route' => route('courses'), 'label' => 'Courses'],
    'contact' => ['route' => route('contact'), 'label' => 'Contact'],
    'terms' => ['route' => route('terms'), 'label' => 'Terms'],
    'privacy' => ['route' => route('privacy'), 'label' => 'Privacy'],
];
@endphp

<ul class="flex gap-4">
    @foreach ($items as $item)
    <x-footer.nav-item :href="$item['route']">
        {{ $item['label'] }}
    </x-footer.nav-item>
    @endforeach
</ul>
