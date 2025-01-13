<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Anggota Tim') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.teams.update', $team->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $team->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="image" :value="__('Gambar (Biarkan kosong untuk mempertahankan gambar saat ini)')" />
                        <input id="image" class="block mt-1 w-full border-gray-300 rounded-md" type="file" name="image" accept="image/*" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="h-20 w-20 object-cover rounded-full">
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="occupation" :value="__('Pekerjaan')" />
                        <x-text-input id="occupation" class="block mt-1 w-full" type="text" name="occupation" :value="old('occupation', $team->occupation)" required autocomplete="occupation" />
                        <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-[#FAF3EA] text-gray-800 rounded-full">
                            Perbarui Anggota Tim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
