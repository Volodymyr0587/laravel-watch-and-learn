@php
$courses = [
    [
        'title' => 'Course 1',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 21,
        'length' => '2h 30m',
    ],
    [
        'title' => 'Course 2',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 16,
        'length' => '1h 50m',
    ],
    [
        'title' => 'Course 3',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 12,
        'length' => '1h 30m',
    ],
    [
        'title' => 'Course 4',
        'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam laudantium nesciunt iure dolorum',
        'lessons_count' => 32,
        'length' => '3h 45m',
    ],
];
@endphp

<section class="w-full">
    <div class="container flex flex-col gap-8 pb-24 px-4">
        <h2 class="text-center font-black text-4xl">Latest Courses</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($courses as $course)
            <x-course :$course />
            @endforeach
        </div>
    </div>
</section>
