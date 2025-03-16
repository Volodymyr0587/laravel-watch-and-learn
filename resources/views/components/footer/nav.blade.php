<ul class="flex gap-4">
    @foreach ($items as $item)
    <x-footer.nav-item :href="$item['route']">
        {{ $item['label'] }}
    </x-footer.nav-item>
    @endforeach
</ul>
