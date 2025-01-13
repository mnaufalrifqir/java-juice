<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex border">
                <div class="w-1/2 pr-4">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="rounded-2xl object-cover w-full h-[300px]">
                    @else
                        <p class="text-gray-500">{{ __('Tidak ada gambar tersedia') }}</p>
                    @endif
                </div>
                <div class="w-1/2 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Kategori:') }}</strong> {{ $product->category->name }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Deskripsi:') }}</strong> {{ $product->description }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Berat:') }}</strong> {{ $product->weight }} gram</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Harga:') }}</strong> Rp. {{ number_format($product->price, 2, ',', '.') }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Diskon:') }}</strong> {{ $product->discount }} %</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Harga Saat Ini:') }}</strong> Rp. {{ number_format($product->current_price, 2, ',', '.') }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Stok:') }}</strong> {{ $product->stock }} pcs</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Terjual:') }}</strong> {{ $product->sold }} pcs</p>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full mr-2">
                            Ubah
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-2 px-4 bg-red-500 text-white rounded-full">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <a href="{{ route('admin.products.index') }}" class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full">
                    Kembali ke Daftar Produk
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
