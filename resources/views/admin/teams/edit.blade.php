<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Anggota Tim') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 shadow-sm border rounded-lg space-y-4">
                @if($errors->any())
                    <div class="space-y-2">
                        @foreach($errors->all() as $error)
                            <div class="py-3 px-4 w-full rounded-xl bg-red-500 text-white text-sm">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.teams.update', $team->id) }}" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    @method('PUT')

                    {{-- Nama --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name', $team->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    {{-- Gambar --}}
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Gambar (Biarkan kosong untuk mempertahankan gambar saat ini)</label>
                        <input id="image" class="mt-1 block w-full border-gray-300 rounded-md" type="file" name="image" accept="image/*" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        
                        @if($team->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="h-20 w-20 object-cover rounded-full">
                            </div>
                        @endif
                    </div>

                    {{-- Pekerjaan --}}
                    <div>
                        <label for="occupation" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                        <x-text-input id="occupation" class="mt-1 block w-full" type="text" name="occupation" :value="old('occupation', $team->occupation)" required autocomplete="occupation" />
                        <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                    </div>

                    {{-- Tombol --}}
                    <div class="flex justify-end">
                        <button type="submit" class="font-bold py-3 px-6 bg-[#FAF3EA] text-gray-800 rounded-full hover:bg-[#f0e5d4] transition">
                            Perbarui Anggota Tim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
