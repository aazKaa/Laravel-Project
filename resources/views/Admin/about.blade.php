<x-admin.layout>

    <div class="text-white">
        <h1 class="text-3xl font-bold mb-6">
            {{ $title }}
        </h1>

        <div class="space-y-3">
            <p>
                <span class="font-semibold">Nama :</span>
                {{ $name }}
            </p>

            <p>
                <span class="font-semibold">Hobby :</span>
                {{ $hobby }}
            </p>

            <p>
                <span class="font-semibold">Akun :</span>
                {{ $account }}
            </p>
        </div>
    </div>

</x-admin.layout>
