@props(['href'])

<li>
    <a href="{{ $href }}" class="font-medium text-white hover:text-purple-200">
        {{ $slot }}
    </a>
</li>

