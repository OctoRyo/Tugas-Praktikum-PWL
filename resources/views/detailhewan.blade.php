<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 mb-6">Berbagai Macam Hewan</h2>

        <div class="flex flex-wrap gap-6">

            <div class="w-60 bg-white rounded-xl border border-gray-200/80 shadow-xs overflow-hidden transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <img src="img/foto kucing.jpg" class="w-full h-36 object-cover" alt="kucing" />
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Kucing</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Kucing adalah hewan mamalia karnivora yang jinak, manja, dan suka bermain.</p>
                </div>
            </div>

            <div class="w-60 bg-white rounded-xl border border-gray-200/80 shadow-xs overflow-hidden transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <img src="img/foto anjing.jpg" class="w-full h-36 object-cover" alt="anjing" />
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Anjing</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Anjing adalah hewan peliharaan yang cerdas, sangat setia, dan mudah dilatih.</p>
                </div>
            </div>

            <div class="w-60 bg-white rounded-xl border border-gray-200/80 shadow-xs overflow-hidden transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <img src="img/bunny.jpg" class="w-full h-36 object-cover" alt="kelinci" />
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Kelinci</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Kelinci adalah hewan herbivora yang telinganya panjang dan suka melompat.</p>
                </div>
            </div>

            <div class="w-60 bg-white rounded-xl border border-gray-200/80 shadow-xs overflow-hidden transition-all duration-300 hover:shadow-md hover:-translate-y-1">
                <img src="img/kura-kura.jpg" class="w-full h-36 object-cover" alt="kura-kura" />
                <div class="p-4">
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Kura-Kura</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Kura-kura adalah reptil lambat yang memiliki cangkang keras pelindung.</p>
                </div>
            </div>

        </div>

        <script src="js/script.js"></script>
</x-layout>