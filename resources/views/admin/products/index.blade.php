<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Produk') }}
            </h2>
            <a href="{{ route('admin.products.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                + Tambah Baru
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded-lg overflow-hidden">
                {{-- Tabel Desktop --}}
                <table class="min-w-full bg-white hidden sm:table text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Gambar</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Nama</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Kategori</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Harga</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Berat</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Stok</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Terjual</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $product->id }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    @if($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-12 w-12 object-cover rounded mx-auto">
                                    @else
                                        <span class="text-gray-500">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->name }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->category->name ?? 'Tidak ada kategori' }}</td>
                                <td class="py-2 px-4 border-b text-center">Rp {{ number_format($product->current_price, 2, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->weight }} gram</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->stock }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->sold }}</td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="{{ route('admin.products.show', $product->id) }}" title="Lihat">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a href="{{ route('admin.products.edit', $product->id) }}" title="Edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus produk ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus" class="focus:outline-none">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </form>
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

                {{-- Tampilan Mobile --}}
                <div class="sm:hidden">
                    @forelse($products as $product)
                        <div class="bg-white shadow rounded-lg p-4">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600 font-bold">ID: {{ $product->id }}</span>
                                <div class="flex gap-3 text-gray-600">
                                <a href="{{ route('admin.products.show', $product->id) }}" title="Lihat">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a href="{{ route('admin.products.edit', $product->id) }}" title="Edit">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus produk ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Hapus">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                @if($product->image)
                                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="h-16 w-16 object-cover rounded">
                                @else
                                    <span class="text-gray-500">Tidak ada gambar</span>
                                @endif
                                <div class="flex flex-col text-sm text-gray-700">
                                    <span class="font-bold">{{ $product->name }}</span>
                                    <span>Kategori: {{ $product->category->name ?? 'Tidak ada kategori' }}</span>
                                    <span>Harga: Rp {{ number_format($product->current_price, 2, ',', '.') }}</span>
                                    <span>Berat: {{ $product->weight }} gram</span>
                                    <span>Stok: {{ $product->stock }} pcs</span>
                                    <span>Terjual: {{ $product->sold }} pcs</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="py-3 text-center bg-red-500 text-white">
                            Tidak ada produk ditemukan
                        </div>
                    @endforelse
                </div>

                {{-- Pagination --}}
                <div class="bg-gray-50 px-4 py-2 flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0">
                    <div>
                        @if(!$products->onFirstPage())
                            <a href="{{ $products->previousPageUrl() }}" class="text-gray-500 hover:underline">Sebelumnya</a>
                        @endif
                    </div>

                    <span class="text-gray-500 text-center">
                        Menampilkan {{ $products->firstItem() }} - {{ $products->lastItem() }} dari {{ $products->total() }}
                    </span>

                    <div>
                        @if($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}" class="text-gray-500 hover:underline">Selanjutnya</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
