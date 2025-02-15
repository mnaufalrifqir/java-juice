<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Buat Gambar Banner Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 border sm:rounded-lg">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.hero_sections.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <div class="flex items-center">
                            <x-input-label for="image" :value="__('Gambar Banner')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept=".jpeg, .jpg, .png" required />
                        <p class="text-xs text-gray-500 mt-2">Hanya tipe file .jpeg, .jpg, dan .png yang diterima.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <x-input-label for="isPrimary" :value="__('Apakah Utama?')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <select id="isPrimary" name="isPrimary" class="block mt-1 w-full">
                            <option value="0" {{ old('isPrimary') == '0' ? 'selected' : '' }}>Tidak</option>
                            <option value="1" {{ old('isPrimary') == '1' ? 'selected' : '' }}>Ya</option>
                        </select>
                        <x-input-error :messages="$errors->get('isPrimary')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-[#FAF3EA] text-gray-800 rounded-full">
                            Tambahkan Gambar Banner Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
