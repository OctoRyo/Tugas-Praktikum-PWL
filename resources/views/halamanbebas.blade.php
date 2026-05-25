<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">Berbagai Macam Hewan</h2>

    <div class="flex flex-wrap gap-4">

        <div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Kucing</h3>
            <img src="img/foto kucing.jpg" class="w-48 h-32 object-cover rounded" alt="kucing" />
        </div>

        <div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Anjing</h3>
            <img src="img/foto anjing.jpg" class="w-48 h-32 object-cover rounded" alt="anjing" />
        </div>

        <div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Kelinci</h3>
            <img src="img/bunny.jpg" class="w-48 h-32 object-cover rounded" alt="kelinci" />
        </div>

        <div>
            <h3 class="text-lg font-bold text-gray-900 mb-1">Kura-Kura</h3>
            <img src="img/kura-kura.jpg" class="w-48 h-32 object-cover rounded" alt="kura-kura" />
        </div>

    </div>

    <script src="js/script.js"></script>
</x-layout>