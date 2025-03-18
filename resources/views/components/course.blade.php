<a href="{{ route('course') }}" class="rounded-md bg-gray-100 hover:bg-gray-200">
    <article class="p-4">
        <header>
            <h3 class="font-semibold text-xl">{{ $course['title'] }}</h3>
        </header>
        <p class="font-normal mb-8 mt-2">{{ $course['description'] }}</p>
        <footer class="flex gap-2 justify-between mt-auto">
            <div class="flex items-center gap-2">
                <x-icon name="film" class="size-4"/>
                <span class="text-sm font-semibold">{{ $course['lessons_count'] }} {{ Str::plural('lesson', $course['lessons_count']) }}</span>
            </div>
            <div class="flex items-center gap-2">
                <x-icon name="clock" class="size-4"/>
                <span class="text-sm font-semibold">{{ $course['length'] }}</span>
            </div>
        </footer>
    </article>
</a>
