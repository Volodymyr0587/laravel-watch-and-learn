<x-layout>
    <section class="pt-32 px-10">
        <div class="container flex flex-col gap-8 pb-24">
            <h2 class="text-center font-black text-4xl">Courses</h2>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($courses as $course)
                <x-course :$course />
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </section>
</x-layout>
