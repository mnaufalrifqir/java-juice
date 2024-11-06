@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Main Content -->
    <main class="bg-gray-50 py-10">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Card untuk Cart Items -->
                <div class="flex-1 bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Product</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Price</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Quantity</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Amount</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                    <tr>
                                        <td class="py-4 px-4 flex items-center">
                                            <img
                                            alt="{{ $item->product->name }}"
                                            src="{{ Storage::url($item->product->image) }}"
                                            class="h-12 w-12 rounded-md"
                                            height="50"
                                            width="50"
                                            />
                                            <span class="ml-4 text-gray-700">{{ $item->product->name }}</span>
                                        </td>
                                        <td class="py-4 px-4 text-gray-700">Rp. {{ number_format($item->product->price, 2) }}</td>
                                        <td class="py-4 px-4">
                                            <div class="flex items-center">
                                                <form action="{{ route('cart.updateQuantity', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" name="quantity" value="{{ $item->quantity - 1 }}" class="text-gray-700 border border-gray-300 px-3 py-1" {{ $item->quantity <= 1 ? 'disabled' : '' }}>-</button>
                                                </form>
                                                <input type="text" name="quantity" value="{{ $item->quantity }}" class="w-12 text-center border-t border-b border-gray-300" readonly />
                                                <form action="{{ route('cart.updateQuantity', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" name="quantity" value="{{ $item->quantity + 1 }}" class="text-gray-700 border border-gray-300 px-3 py-1">+</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td class="py-4 px-4 text-gray-700">Rp. {{ number_format($item->product->price * $item->quantity, 2) }}</td>
                                        <td class="py-4 px-4">
                                        <form action="{{ route('cart.removeFromCart', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-yellow-500 cursor-pointer">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <!-- Card untuk Cart Totals -->
                <div class="w-[300px] bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-700 mb-4">Cart Totals</h2>
                    <div class="flex justify-between mb-4">
                        <span class="text-gray-700">Total</span>
                        <span class="text-orange-500 font-bold">Rp. {{ number_format($total, 2) }}</span>
                    </div>
                    <a href="{{ route('transactions.checkout') }}" class="block bg-orange-500 text-white text-center py-2 rounded-md hover:bg-orange-600">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
@endsection
