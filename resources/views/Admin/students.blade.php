<x-admin.layout>
    <h1 style="color: white; font-size:40px">{{ $title }}</h1>
<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Absen</th>
                            <th scope="col" class="px-4 py-3">NIS</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Classroom</th>
                            <th scope="col" class="px-4 py-3">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $index + 1 }}</td>
                                <td class="px-4 py-3">{{ $student['nis'] }}</td>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $student['name'] }}
                                </th>
                                <td class="px-4 py-3">{{ $student['classroom'] }}</td>
                                <td class="px-4 py-3">{{ $student['address'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
</x-admin.layout>
