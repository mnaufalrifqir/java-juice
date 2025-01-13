<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Statistik') }}
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

                <form method="POST" action="{{ route('admin.statistics.update', $statistic->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <div class="flex items-center">
                            <x-input-label for="title" :value="__('Judul')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $statistic->title)" required autofocus autocomplete="title" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="description" :value="__('Deskripsi')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <textarea id="description" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" name="description" required>{{ old('description', $statistic->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="icon" :value="__('Ikon (Unggah Gambar Baru)')" />
                        <x-text-input id="icon" type="file" name="icon" class="block mt-1 w-full" accept=".jpeg, .jpg, .png">
                        <p class="text-xs text-gray-500 mt-2">Hanya tipe file .jpeg, .jpg, dan .png yang diterima.</p>
                        <p class="text-sm text-gray-500 mt-2">Ikon Saat Ini: <img src="{{ Storage::url($statistic->icon) }}" alt="Ikon" class="h-10 inline-block"></p>
                        <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-[#FAF3EA] text-gray-800 rounded-full">
                            Perbarui Statistik
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
