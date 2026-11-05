<nav
    class="bg-white border-b border-gray-200
    px-4 py-2.5
    dark:bg-gray-800 dark:border-gray-700
    fixed left-0 right-0 top-0 z-50"
>

    <div class="flex flex-wrap justify-between items-center">

        {{-- Logo --}}
        <div class="flex justify-start items-center">

            {{-- Mobile Sidebar Button --}}
            <button
                data-drawer-target="drawer-navigation"
                data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-gray-600 rounded-lg
                md:hidden hover:bg-gray-100
                dark:text-gray-400 dark:hover:bg-gray-700"
            >

                <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0
                        110 2H4a1 1 0 01-1-1z
                        M3 10a1 1 0 011-1h12a1 1
                        0 110 2H4a1 1 0 01-1-1z
                        M3 15a1 1 0 011-1h12a1 1
                        0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                    />
                </svg>

            </button>

            <a
                href="/admin/dashboard"
                class="flex items-center"
            >

                <span
                    class="self-center text-xl font-semibold
                    whitespace-nowrap dark:text-white"
                >
                    Admin Panel
                </span>

            </a>

        </div>

        {{-- Right Side --}}
        <div class="flex items-center">

            {{-- Notification --}}
            <button
                type="button"
                class="p-2 text-gray-500 rounded-lg
                hover:bg-gray-100
                dark:text-gray-400
                dark:hover:bg-gray-700"
            >

                <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                >
                    <path
                        d="M10 2a6 6 0 00-6 6v3.586l-.707.
                        707A1 1 0 004 14h12a1 1 0
                        00.707-1.707L16 11.586V8a6
                        6 0 00-6-6zM10 18a3 3 0
                        01-3-3h6a3 3 0 01-3 3z"
                    />
                </svg>

            </button>

            {{-- User --}}
            <button
                type="button"
                class="ml-3 flex text-sm bg-gray-800
                rounded-full focus:ring-4
                focus:ring-gray-300"
            >

                <img
                    class="w-8 h-8 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                    alt="User"
                >

            </button>

        </div>

    </div>

</nav>
