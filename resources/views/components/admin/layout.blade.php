<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin Layout</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900">

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

    <div class="antialiased bg-gray-900 min-h-screen">

        {{-- Navbar --}}
        <x-admin.navbar />

        {{-- Sidebar --}}
        <x-admin.sidebar />

        {{-- Content --}}
        <main class="p-4 md:ml-64 h-auto pt-20">

            {{ $slot }}

        </main>

    </div>

</body>

</html>
