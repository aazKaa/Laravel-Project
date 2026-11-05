@props([
    'href' => '#',
    'label' => '',
    'icon' => ''
])

<li>

    <a
        href="{{ $href }}"
        class="flex items-center p-2 text-gray-900 rounded-lg
        dark:text-white hover:bg-gray-100
        dark:hover:bg-gray-700 group"
    >

        <svg
            class="w-5 h-5 text-gray-500 transition duration-75
            dark:text-gray-400 group-hover:text-gray-900
            dark:group-hover:text-white"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
        >

            {!! $icon !!}

        </svg>

        <span class="ml-3">
            {{ $label }}
        </span>

    </a>

</li>
