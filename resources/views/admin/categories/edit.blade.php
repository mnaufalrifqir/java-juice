<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg sm:text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Kategori') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 shadow-sm border rounded-lg space-y-4">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 px-4 mb-2 w-full rounded-xl bg-red-500 text-white text-sm sm:text-base">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <div class="flex items-center mb-1">
                            <x-input-label for="name" :value="__('Nama')" />
                            <span class="text-red-500 ml-1">*</span>
                        </div>
                        <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name', $category->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit" class="font-semibold py-3 px-5 sm:py-4 sm:px-6 bg-[#FAF3EA] text-gray-800 rounded-full text-sm sm:text-base">
                            Perbarui Kategori
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
