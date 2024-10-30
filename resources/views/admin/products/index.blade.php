<x-app-layout>
    <x-slot name="header" >
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Products') }}
            </h2>
            <a href="{{route('admin.products.create')}}" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Image</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Name</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Category</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Price</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Weight</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Stock</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td class="py-2 px-4 border-b text-center">{{ $product->id }}</td>
                                <td class="py-2 px-4 border-b text-center">
                                    <img src="{{Storage::url($product->image)}}" alt="{{ $product->name }}" class="h-16 w-16 object-cover" width="100" height="100">
                                </td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->name }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->category->name }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->price }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->weight }}</td>
                                <td class="py-2 px-4 border-b text-center">{{ $product->stock }}</td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="View">
                                            <a href="">
                                                <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Edit">
                                            <a href="">
                                                <ion-icon name="create-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Delete">
                                            <a href="">
                                                <ion-icon name="trash-outline" class="text-2xl"></ion-icon>
                                            </a>
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
                    @if($products->onFirstPage())
                    <span></span>
                    @else
                    <a href="{{ $products->previousPageUrl() }}" class="text-gray-500">Previous</a>
                    @endif

                    <span class="text-gray-500">{{$products->firstItem()}} - {{$products->lastItem()}} of {{{$products->total()}}}</span>

                    @if($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="text-gray-500">Next</a>
                    @else
                    <span></span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
