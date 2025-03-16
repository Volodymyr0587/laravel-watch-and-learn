@props(['href', 'active' => false])

<li class="relative group">
    <!-- Glowing background effect -->
    <span class="absolute inset-0 mx-auto w-full h-full bg-blue-900 opacity-0
                blur-xl rounded-full scale-50 transition-all duration-300 group-hover:opacity-30
                group-hover:scale-100">
    </span>

    <!-- Nav Link -->
    <a href="{{ $href }}"
       class="relative text-xl font-semibold block px-1 py-2
              {{ $active ? 'text-violet-600' : 'text-gray-800' }}
              hover:text-violet-600">
        {{ $slot }}
    </a>
</li>
