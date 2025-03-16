<ul class="flex gap-4">
    @foreach (config('watch.social_networks') as $name => $link)
    <li>
        <a href="{{ $link }}" target="_blank">
           <x-icon name="{{ $name }}" />
        </a>
    </li>
    @endforeach
</ul>
