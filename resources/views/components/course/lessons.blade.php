<div class="flex flex-col gap-4 w-1/2">
    @php
        $lessonsCount = $lessons->count();
    @endphp
    <h3 class="text-lg font-semibold text-right">{{ $lessonsCount }} {{ Str::plural('lesson', $lessonsCount) }} &middot; {{ $course->formattedLength }}</h3>
    <div class="flex flex-col gap-4">
        @foreach ($lessons as $lesson)
            <x-lesson.card :$lesson />
        @endforeach
    </div>
</div>
