<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Tambah Anggota Tim Baru') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 border rounded-lg sm:rounded-lg shadow-sm">
                @if($errors->any())
                    <div class="space-y-2 mb-4">
                        @foreach($errors->all() as $error)
                            <div class="py-3 px-4 w-full rounded-xl bg-red-500 text-white text-sm">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.teams.store') }}" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    {{-- Nama --}}
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 flex items-center">
                            Nama <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    {{-- Gambar --}}
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 flex items-center">
                            Gambar <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="image" class="mt-1 block w-full" type="file" name="image" accept=".jpeg, .jpg, .png" required />
                        <p class="text-xs text-gray-500 mt-1">Hanya file dengan format .jpeg, .jpg, dan .png yang diperbolehkan.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    {{-- Jabatan --}}
                    <div>
                        <label for="occupation" class="block text-sm font-medium text-gray-700 flex items-center">
                            Jabatan <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="occupation" class="mt-1 block w-full" type="text" name="occupation" :value="old('occupation')" required autocomplete="occupation" />
                        <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
                    </div>

                    {{-- Tombol --}}
                    <div class="flex justify-end">
                        <button type="submit" class="font-bold py-3 px-6 bg-[#FAF3EA] text-gray-800 rounded-full hover:bg-[#f0e5d4] transition">
                            Tambahkan Anggota Tim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
