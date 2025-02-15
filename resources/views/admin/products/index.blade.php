<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Produk') }}
            </h2>
            <a href="{{ route('admin.products.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Tambah Produk Baru
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Gambar</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Nama</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Kategori</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Harga Saat Ini</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Berat</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Stok</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Terjual</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $product->id }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    @if($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-16 w-16 object-cover rounded" width="100" height="100">
                                    @else
                                        <span class="text-gray-500">{{ __('Tidak ada gambar') }}</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->name }}</td>
                                @if($product->category)
                                    <td class="py-2 px-4 border-b text-center">{{ $product->category->name }}</td>
                                @else
                                    <td class="py-2 px-4 border-b text-center text-gray-500">{{ __('Tidak ada kategori') }}</td>
                                @endif
                                <td class="py-2 px-4 border-b text-center">Rp. {{ number_format($product->current_price, 2, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->weight }} gram</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->stock }} pcs</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->sold }} pcs</td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Lihat">
                                            <a href="{{ route('admin.products.show', $product->id) }}">
                                                <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Edit">
                                            <a href="{{ route('admin.products.edit', $product->id) }}">
                                                <ion-icon name="create-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Hapus">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus produk ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Hapus" class="focus:outline-none">
                                                    <ion-icon name="trash-outline" class="text-2xl text-red-500"></ion-icon>
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="py-3 text-center bg-red-500 text-white">
                                    Tidak ada produk ditemukan
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    <div>
                        @if($products->onFirstPage())
                            <span></span>
                        @else
                            <a href="{{ $products->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                        @endif
                    </div>

                    <span class="text-gray-500">
                        Menampilkan {{ $products->firstItem() }} - {{ $products->lastItem() }} dari {{ $products->total() }}
                    </span>

                    <div>
                        @if($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
