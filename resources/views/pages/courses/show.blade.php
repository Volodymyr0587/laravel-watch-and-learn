<x-layout>
    <section class="pt-32 px-10">
        <div class="flex flex-col gap-8 container pb-24">
            <h1 class="text-center font-extrabold text-5xl">{{ $course->title }}</h1>
            <div class="flex gap-6">
                {{-- Course Information --}}
                <div class="flex-1">
                    <article class="flex flex-col gap-4 sticky top-24">
                        <header>
                            <h2 class="text-lg font-semibold">
                                Last Updated: {{ $course->updated_at->format('M d, Y') }}
                            </h2>
                        </header>
                        <p>{{ $course->description }}</p>
                        <footer class="flex gap-2">
                            <a href="#" class="text-center whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-violet-500 text-white hover:bg-violet-600 grow">Start Watching</a>
                            <a href="https://github.com" target="_blank" class="text-center whitespace-nowrap rounded-md font-semibold px-4 py-2 bg-gray-100 hover:bg-gray-200 grow">Source Code</a>
                        </footer>
                    </article>
                </div>
                {{-- End Course Information --}}
                {{-- Course lessons --}}
                <div class="flex flex-col flex-1 gap-4 grow">
                    @php
                        $lessonsCount = $course->lessons_count;
                    @endphp
                    <h3 class="text-lg font-semibold text-right">{{ $lessonsCount }} {{ Str::plural('lesson', $lessonsCount) }} &middot; {{ $course->length }}</h3>
                    <div class="flex flex-col gap-4">
                        @foreach (range(1, 18) as $i)
                            <a href="#" class="flex flex-col gap-2 p-4 rounded-md bg-gray-100 hover:bg-gray-200">
                                <div class="flex gap-2 justify-between font-mono">
                                    <span class="text-sm">{{ $i }}</span>
                                    <span class="text-sm text-gray-600">5m 32sec</span>
                                </div>
                                <h3 class="font-semibold">Lorem ipsum dolor sit</h3>
                            </a>
                        @endforeach
                    </div>
                </div>
                {{-- End Course lessons --}}
            </div>
        </div>
    </section>
</x-layout>
