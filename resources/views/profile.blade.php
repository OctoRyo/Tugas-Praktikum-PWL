<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-8 max-w-screen-md">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Profil</h1>

        @if($profile)
            <div class="flex flex-col md:flex-row gap-8 items-start">

                {{-- Avatar --}}
                <div class="flex-shrink-0">
                    @if($profile->avatar)
                        <img src="{{ $profile->avatar }}" alt="Foto {{ $profile->name }}"
                             class="w-40 h-40 rounded-full object-cover border-4 border-blue-200">
                    @else
                        <div class="w-40 h-40 rounded-full bg-blue-100 flex items-center justify-center border-4 border-blue-200">
                            <span class="text-4xl text-blue-400 font-bold">
                                {{ strtoupper(substr($profile->name, 0, 1)) }}
                            </span>
                        </div>
                    @endif
                </div>

                <div class="flex-1">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-1">{{ $profile->name }}</h2>
                    <p class="text-blue-600 mb-4">{{ $profile->email }}</p>

                    <p class="text-gray-700 leading-relaxed mb-6">{{ $profile->bio }}</p>

                    <div class="space-y-2 text-gray-600">
                        @if($profile->phone)
                            <div class="flex gap-2">
                                <span class="font-medium w-20">Telepon</span>
                                <span>: {{ $profile->phone }}</span>
                            </div>
                        @endif

                        @if($profile->address)
                            <div class="flex gap-2">
                                <span class="font-medium w-20">Alamat</span>
                                <span>: {{ $profile->address }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <p class="text-gray-500">Data profil belum tersedia.</p>
        @endif
    </div>

</x-layout>