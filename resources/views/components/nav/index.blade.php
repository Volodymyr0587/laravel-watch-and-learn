<nav>
    <ul class="flex gap-8">
        @foreach ($items as $routeName => $item)
            <x-nav.item :href="$item['route']" :active="request()->routeIs($routeName)">
                {{ $item['label'] }}
            </x-nav.item>
        @endforeach
    </ul>
</nav>
