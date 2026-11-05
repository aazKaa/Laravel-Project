<x-admin.layout>


<section class="p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <div class="relative overflow-hidden rounded-lg bg-white shadow-md dark:bg-gray-800">

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">

                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">No</th>
                            <th scope="col" class="px-4 py-3">Classroom</th>
                            <th scope="col" class="px-4 py-3">Major</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($classroom as $item)
                            <tr class="border-b hover:bg-gray-50 dark:border-gray-700 dark:hover:bg-gray-600">

                                <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="whitespace-nowrap px-4 py-3 font-semibold text-gray-900 dark:text-white">
                                    {{ $item->name }}
                                </td>

                                <td class="px-4 py-3">
                                    <span class="rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                                        {{ $item->major }}
                                    </span>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</section>


</x-admin.layout>
