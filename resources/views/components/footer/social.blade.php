<ul class="flex gap-4">
    @foreach (config('watch.social_networks') as $name => $link)
    <li>
        <a href="{{ $link }}" target="_blank">
           <x-icon name="{{ $name }}" class="size-8 fill-white hover:fill-violet-200" />
        </a>
    </li>
    @endforeach
</ul>
