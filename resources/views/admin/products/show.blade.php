<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white p-6 sm:p-10 border rounded-lg sm:rounded-lg shadow-sm flex flex-col sm:flex-row gap-4">
                <!-- Gambar Produk -->
                <div class="w-full sm:w-1/2">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                            class="rounded-2xl object-cover w-full h-[200px] sm:h-[300px] lg:h-[400px]">
                    @else
                        <p class="text-gray-500">{{ __('Tidak ada gambar tersedia') }}</p>
                    @endif
                </div>

                <!-- Detail Produk -->
                <div class="w-full sm:w-1/2 flex flex-col justify-between">
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

                    <!-- Tombol Aksi -->
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-end mt-4 gap-2">
                        <a href="{{ route('admin.products.edit', $product->id) }}"
                            class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full w-full sm:w-auto text-center">
                            Ubah
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');" class="w-full sm:w-auto">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="w-full sm:w-auto font-bold py-2 px-4 bg-red-500 text-white rounded-full">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="flex justify-center sm:justify-end mt-6">
                <a href="{{ route('admin.products.index') }}"
                    class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full text-center">
                    Kembali ke Daftar Produk
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
