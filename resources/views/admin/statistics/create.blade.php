<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Buat Statistik Baru') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 border rounded-lg sm:rounded-lg shadow-sm">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 px-4 w-full rounded-2xl bg-red-500 text-white mb-4 text-sm">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.statistics.store') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Judul -->
                    <div class="w-full">
                        <label for="title" class="flex items-center font-medium text-sm text-gray-700">
                            {{ __('Judul') }} <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="title" class="mt-1 block w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <!-- Deskripsi -->
                    <div class="w-full">
                        <label for="description" class="flex items-center font-medium text-sm text-gray-700">
                            {{ __('Deskripsi') }} <span class="text-red-500 ml-1">*</span>
                        </label>
                        <textarea id="description" name="description" required
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring focus:ring-indigo-200">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Icon -->
                    <div class="w-full">
                        <label for="icon" class="flex items-center font-medium text-sm text-gray-700">
                            {{ __('Ikon (Unggah Gambar)') }} <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="icon" type="file" name="icon" class="mt-1 block w-full" accept=".jpeg, .jpg, .png" required />
                        <p class="text-xs text-gray-500 mt-2">Hanya tipe file .jpeg, .jpg, dan .png yang diperbolehkan.</p>
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <!-- Tombol -->
                    <div class="flex flex-col sm:flex-row sm:justify-end gap-4">
                        <button type="submit"
                            class="w-full sm:w-auto font-bold py-3 px-6 bg-[#FAF3EA] text-gray-800 rounded-full transition duration-200 hover:bg-[#f5e6d5]">
                            Tambah Statistik Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
