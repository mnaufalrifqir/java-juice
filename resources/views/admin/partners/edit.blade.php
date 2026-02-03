<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Mitra') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 shadow-sm border rounded-lg space-y-4">
                @if($errors->any())
                    <div class="space-y-2 mb-4">
                        @foreach($errors->all() as $error)
                            <div class="py-3 px-4 rounded-xl bg-red-500 text-white text-sm">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.partners.update', $partner->id) }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Nama <span class="text-red-500">*</span>
                        </label>
                        <x-text-input id="name" class="mt-1 block w-full" type="text" name="name" :value="old('name', $partner->name)" required autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Logo -->
                    <div>
                        <label for="logo" class="block text-sm font-medium text-gray-700">
                            Logo (Unggah Gambar Baru)
                        </label>
                        <x-text-input id="logo" type="file" name="logo" class="mt-1 block w-full" accept=".jpeg, .jpg, .png" />
                        <p class="text-xs text-gray-500 mt-2">Hanya tipe file .jpeg, .jpg, dan .png yang diterima.</p>
                        <div class="mt-2">
                            <span class="text-sm text-gray-500">Ikon Saat Ini:</span>
                            <img src="{{ Storage::url($partner->logo) }}" alt="Ikon" class="h-10 mt-1 rounded-md border inline-block">
                        </div>
                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="w-full sm:w-auto font-bold py-3 px-6 bg-[#FAF3EA] text-gray-800 rounded-full text-sm sm:text-base">
                            Perbarui Mitra
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
