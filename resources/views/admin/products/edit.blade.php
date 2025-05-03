<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 shadow-sm border rounded-lg space-y-4">
                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white px-4 text-sm sm:text-base mb-2">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $product->name)" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="category" :value="__('Kategori')" />
                        <select name="category_id" id="category_id" class="py-3 rounded-lg pl-3 w-full bg-gray-50 text-gray-700">
                            <option value="">Pilih Kategori Produk</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Deskripsi')" />
                        <textarea name="description" id="description" cols="30" rows="5" class="border border-slate-300 rounded-xl w-full">{{ old('description', $product->description) }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="weight" :value="__('Berat (gram)')" />
                        <x-text-input id="weight" class="block mt-1 w-full" type="text" name="weight" :value="old('weight', $product->weight)" required autofocus autocomplete="weight" />
                        <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Harga (Rupiah)')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price', $product->price)" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="stock" :value="__('Stok')" />
                        <x-text-input id="stock" class="block mt-1 w-full" type="text" name="stock" :value="old('stock', $product->stock)" required autofocus autocomplete="stock" />
                        <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="discount" :value="__('Diskon (%)')" />
                        <x-text-input id="discount" class="block mt-1 w-full" type="text" name="discount" :value="old('discount', $product->discount)" required autofocus autocomplete="discount" />
                        <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="image" :value="__('Gambar')" />
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Saat Ini" class="rounded-2xl object-cover w-[90px] h-[90px] mb-2">
                        @endif
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" autofocus autocomplete="image" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center justify-end mt-6 gap-3">
                        <button type="submit" class="w-full sm:w-auto font-bold py-3 px-6 bg-[#FAF3EA] text-gray-800 rounded-full text-sm sm:text-base">
                            Perbarui Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
