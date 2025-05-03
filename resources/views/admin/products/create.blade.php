<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Buat Produk Baru') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 border rounded-lg sm:rounded-lg shadow-sm">
                @if($errors->any())
                    <div class="space-y-2">
                        @foreach($errors->all() as $error)
                            <div class="py-3 px-4 w-full rounded-xl bg-red-500 text-white text-sm">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    {{-- Nama --}}
                    <div>
                        <label for="name" class="flex items-center text-sm font-medium text-gray-700">
                            Nama <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-1" />
                    </div>

                    {{-- Kategori --}}
                    <div>
                        <label for="category_id" class="flex items-center text-sm font-medium text-gray-700">
                            Kategori <span class="text-red-500 ml-1">*</span>
                        </label>
                        <select name="category_id" id="category_id" class="py-2 mt-1 block w-full rounded-md border-gray-300 text-sm text-gray-700">
                            <option value="">Pilih Kategori Produk</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-1" />
                    </div>

                    {{-- Deskripsi --}}
                    <div>
                        <label for="description" class="flex items-center text-sm font-medium text-gray-700">
                            Deskripsi <span class="text-red-500 ml-1">*</span>
                        </label>
                        <textarea name="description" id="description" rows="4" class="mt-1 w-full border border-gray-300 rounded-md text-sm p-2"></textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-1" />
                    </div>

                    {{-- Berat --}}
                    <div>
                        <label for="weight" class="flex items-center text-sm font-medium text-gray-700">
                            Berat (gram) <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight')" required autocomplete="weight" />
                        <x-input-error :messages="$errors->get('weight')" class="mt-1" />
                    </div>

                    {{-- Harga --}}
                    <div>
                        <label for="price" class="flex items-center text-sm font-medium text-gray-700">
                            Harga (Rupiah) <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-1" />
                    </div>

                    {{-- Stok --}}
                    <div>
                        <label for="stock" class="flex items-center text-sm font-medium text-gray-700">
                            Stok <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock" :value="old('stock')" required autocomplete="stock" />
                        <x-input-error :messages="$errors->get('stock')" class="mt-1" />
                    </div>

                    {{-- Diskon --}}
                    <div>
                        <label for="discount" class="flex items-center text-sm font-medium text-gray-700">
                            Diskon (%) <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="discount" class="block mt-1 w-full" type="text" name="discount" :value="old('discount')" required autocomplete="discount" />
                        <x-input-error :messages="$errors->get('discount')" class="mt-1" />
                    </div>

                    {{-- Gambar --}}
                    <div>
                        <label for="image" class="flex items-center text-sm font-medium text-gray-700">
                            Gambar <span class="text-red-500 ml-1">*</span>
                        </label>
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept=".jpeg, .jpg, .png" required />
                        <p class="text-xs text-gray-500 mt-1">Hanya file dengan format .jpeg, .jpg, dan .png yang diperbolehkan.</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-1" />
                    </div>

                    {{-- Tombol Submit --}}
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="font-bold py-3 px-6 bg-[#FAF3EA] text-gray-800 rounded-full text-sm hover:bg-[#f3e6d7] transition">
                            Tambahkan Produk Baru
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
