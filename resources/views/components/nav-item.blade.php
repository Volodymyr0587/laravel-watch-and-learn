@props(['href', 'active' => false])

<li>
    <a href="{{ $href }}" class="text-xl font-semibold {{ $active ? 'text-violet-600' : '' }} hover:text-violet-600">
        {{ $slot }}
    </a>
</li>
