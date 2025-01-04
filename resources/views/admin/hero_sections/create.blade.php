<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Create New Hero Image') }}
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
                            <x-input-label for="image" :value="__('Hero Image')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept=".jpeg, .jpg, .png" required />
                        <p class="text-xs text-gray-500 mt-2">Only .jpeg, .jpg, and .png file types are accepted.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <x-input-label for="isPrimary" :value="__('Is Primary?')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <select id="isPrimary" name="isPrimary" class="block mt-1 w-full">
                            <option value="0" {{ old('isPrimary') == '0' ? 'selected' : '' }}>No</option>
                            <option value="1" {{ old('isPrimary') == '1' ? 'selected' : '' }}>Yes</option>
                        </select>
                        <x-input-error :messages="$errors->get('isPrimary')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-[#FAF3EA] text-gray-800 rounded-full">
                            Add New Hero Image
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
