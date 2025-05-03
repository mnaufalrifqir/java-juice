<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg sm:text-xl text-gray-800 leading-tight py-2">
            {{ __('Buat Gambar Banner Baru') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 border rounded-lg sm:rounded-lg shadow-sm">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 px-4 mb-2 w-full rounded-xl bg-red-500 text-white text-sm sm:text-base">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.hero_sections.store') }}" enctype="multipart/form-data">
                    @csrf

                    {{-- Gambar --}}
                    <div class="mb-4">
                        <div class="flex items-center mb-1">
                            <x-input-label for="image" :value="__('Gambar Banner')" />
                            <span class="text-red-500 ml-1">*</span>
                        </div>
                        <x-text-input id="image" class="block w-full" type="file" name="image" accept=".jpeg, .jpg, .png" required />
                        <p class="text-xs text-gray-500 mt-2">Hanya tipe file .jpeg, .jpg, dan .png yang diterima.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    {{-- Status Utama --}}
                    <div class="mb-4">
                        <div class="flex items-center mb-1">
                            <x-input-label for="isPrimary" :value="__('Apakah Utama?')" />
                            <span class="text-red-500 ml-1">*</span>
                        </div>
                        <select id="isPrimary" name="isPrimary" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50">
                            <option value="0" {{ old('isPrimary') == '0' ? 'selected' : '' }}>Tidak</option>
                            <option value="1" {{ old('isPrimary') == '1' ? 'selected' : '' }}>Ya</option>
                        </select>
                        <x-input-error :messages="$errors->get('isPrimary')" class="mt-2" />
                    </div>

                    {{-- Tombol Submit --}}
                    <div class="flex justify-end mt-6">
                        <button type="submit" class="font-semibold py-3 px-5 sm:py-4 sm:px-6 bg-[#FAF3EA] text-gray-800 rounded-full text-sm sm:text-base">
                            Tambahkan Gambar Banner Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
