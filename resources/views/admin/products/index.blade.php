<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Products') }}
            </h2>
            <a href="{{ route('admin.products.create') }}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Add New
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
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Image</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Name</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Category</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Current Price</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Weight</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Stock</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Sold</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Actions</th>
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
                                        <span class="text-gray-500">{{ __('No image') }}</span>
                                    @endif
                                </td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->name }}</td>
                                @if($product->category)
                                    <td class="py-2 px-4 border-b text-center">{{ $product->category->name }}</td>
                                @else
                                    <td class="py-2 px-4 border-b text-center text-gray-500">{{ __('No category') }}</td>
                                @endif
                                <td class="py-2 px-4 border-b text-center">Rp. {{ number_format($product->current_price, 2, ',', '.') }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->weight }} gram</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->stock }} pcs</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->sold }} pcs</td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="View">
                                            <a href="{{ route('admin.products.show', $product->id) }}">
                                                <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Edit">
                                            <a href="{{ route('admin.products.edit', $product->id) }}">
                                                <ion-icon name="create-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Delete">
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="Delete" class="focus:outline-none">
                                                    <ion-icon name="trash-outline" class="text-2xl text-red-500"></ion-icon>
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="py-3 text-center bg-red-500 text-white">
                                    No products found
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
                            <a href="{{ $products->previousPageUrl() }}" class="text-gray-500 hover:underline">Previous</a>
                        @endif
                    </div>

                    <span class="text-gray-500">
                        Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} of {{ $products->total() }}
                    </span>

                    <div>
                        @if($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}" class="text-gray-500 hover:underline">Next</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
