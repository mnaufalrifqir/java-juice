@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Konten Utama -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <i class="fas fa-comment-dots text-blue-500 text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Detail Ulasan Anda</h1>
                <p class="text-gray-600 mt-2">Berikut adalah ulasan yang Anda berikan untuk transaksi ini dan produk yang Anda beli.</p>
            </div>

            <div class="space-y-6">
                <!-- Ulasan Transaksi -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Ulasan Transaksi</h2>
                    <div class="mt-4">
                        <p class="text-gray-700"><span class="font-semibold">Rating:</span> 
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= $transactionReview->rating ? 'text-yellow-500' : 'text-gray-400' }}"></i>
                            @endfor
                        </p>
                        <p class="mt-2 text-gray-700"><span class="font-semibold">Komentar:</span> {{ $transactionReview->comment }}</p>
                    </div>
                </div>

                <!-- Ulasan Produk -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Ulasan Produk</h2>
                    @foreach ($productReviews as $review)
                        <div class="border-b border-gray-200 py-4">
                            <div class="flex items-center space-x-4">
                                <img src="{{ Storage::url($review->product->image) }}" alt="{{ $review->product->name }}" class="w-16 h-16 rounded">
                                <p class="font-semibold text-gray-700">{{ $review->product->name }}</p>
                            </div>
                            <div class="mt-4">
                                <p class="text-gray-700"><span class="font-semibold">Rating:</span> 
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $review->rating ? 'text-yellow-500' : 'text-gray-400' }}"></i>
                                    @endfor
                                </p>
                                <p class="mt-2 text-gray-700"><span class="font-semibold">Komentar:</span> {{ $review->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Tombol Kembali -->
                <div class="text-center mt-6">
                    <a href="{{ route('transactions.index') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md font-semibold">Kembali ke Transaksi</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <x-footer/>
@endsection
