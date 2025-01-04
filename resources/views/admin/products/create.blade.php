<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Create New Product') }}
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

                <form method="POST" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="flex items-center">
                            <x-input-label for="name" :value="__('Name')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="category" :value="__('Category')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <select name="category_id" id="category_id" class="py-3 rounded-lg pl-3 w-full bg-gray-50 text-[#9ca3af]">
                            <option value="">Choose Product Category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="description" :value="__('Description')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <textarea name="description" id="description" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full"></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="weight" :value="__('Weight (gram)')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight')" required autofocus autocomplete="weight" />
                        <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="price" :value="__('Price (Rupiah)')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="stock" :value="__('Stock')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock" :value="old('stock')" required autofocus autocomplete="stock" />
                        <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="discount" :value="__('Discount (%)')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="discount" class="block mt-1 w-full" type="text" name="discount" :value="old('discount')" required autofocus autocomplete="discount" />
                        <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center">
                            <x-input-label for="image" :value="__('Image')" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept=".jpeg, .jpg, .png" required autofocus autocomplete="image" />
                        <p class="text-xs text-gray-500 mt-2">Only .jpeg, .jpg, and .png file types are accepted.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-[#FAF3EA] text-gray-800 rounded-full">
                            Add New Product
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
