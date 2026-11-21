<x-admin.layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
    </head>
    <body>
        <p style="font-size:30px; color:white;">{{ $title }}</p>
        <ul style="color: white;">
            <li>{{ $nama }}</li>
            <li>{{ $kelas }}</li>
            <li>{{ $hobby }}</li>
            <li>{{ $repository }} <a href="https://github.com/aazKaa?tab=repositories" target="_blank" style="color: white;">https://github.com/aazKaa</a></li>
        </ul>
    </body>
    </html>
</x-admin.layout>
