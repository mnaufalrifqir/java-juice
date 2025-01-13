@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Konten Utama -->
    <main class="bg-gray-50 py-10 min-h-screen">
        <div class="container mx-auto px-4 py-8">
            @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
            @elseif(session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                {{ session('error') }}
            </div>
            @endif
            <div class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Kartu untuk Item Keranjang -->
                <div class="flex-1 bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Produk</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Harga</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Kuantitas</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Jumlah</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($cartItems as $item)
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
                                    <td class="py-4 px-4 text-gray-700">Rp. {{ number_format($item->product->current_price, 2) }}</td>
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
                                    <td class="py-4 px-4 text-gray-700">Rp. {{ number_format($item->product->current_price * $item->quantity, 2) }}</td>
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
                                @empty
                                <tr>
                                    <td class="py-4 px-4 text-center" colspan="5">Tidak ada item di keranjang</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 text-center" colspan="5">
                                        <a href="{{ route('front.product') }}" class="bg-yellow-500 text-white px-6 py-2 rounded">Belanja Sekarang</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <!-- Kartu untuk Total Keranjang -->
                <div class="w-[300px] bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-700 mb-4">Total Keranjang</h2>
                    <div class="flex justify-between mb-4">
                        <span class="text-gray-700">Total</span>
                        <span class="text-orange-500 font-bold">Rp. {{ number_format($total, 2) }}</span>
                    </div>
                    <a href="{{ route('transactions.checkout') }}" class="block bg-orange-500 text-white text-center py-2 rounded-md hover:bg-orange-600">Lanjut ke Pembayaran</a>
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
@endsection
