<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex border">
                <div class="w-1/2 pr-4">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="rounded-2xl object-cover w-full h-[300px]">
                    @else
                        <p class="text-gray-500">{{ __('No image available') }}</p>
                    @endif
                </div>
                <div class="w-1/2 flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Category:') }}</strong> {{ $product->category->name }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Description:') }}</strong> {{ $product->description }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Weight:') }}</strong> {{ $product->weight }} gram</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Price:') }}</strong> Rp. {{ number_format($product->price, 2, ',', '.') }}</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Stock:') }}</strong> {{ $product->stock }} pcs</p>
                        <p class="mt-2 text-gray-600"><strong>{{ __('Discount:') }}</strong> {{ $product->discount }} %</p>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full mr-2">
                            Edit
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-2 px-4 bg-red-500 text-white rounded-full">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <a href="{{ route('admin.products.index') }}" class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full">
                    Back to Products
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
