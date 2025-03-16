@php
    $links = [
        'youtube' => 'https://youtube.com',
        'telegram' => 'https://telegram.org',
        'github' => 'https://github.com',
        'x' => 'https://x.com',
    ];
@endphp

<ul class="flex gap-4">
    @foreach ($links as $name => $link)
    <li>
        <a href="{{ $link }}" target="_blank">
           <x-icon name="{{ $name }}" />
        </a>
    </li>
    @endforeach
</ul>
