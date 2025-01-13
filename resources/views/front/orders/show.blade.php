@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Konten Utama -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                @if ($transaction->payment_status == 'pending')
                    <i class="fas fa-exclamation-circle text-red-500 text-4xl"></i>
                    <h1 class="text-2xl font-semibold mt-2 text-red-500">Pembayaran Tertunda</h1>
                    <p class="text-gray-600 mt-2">Silakan selesaikan pembayaran Anda untuk memproses pesanan Anda.</p>
                @else
                    <i class="fas fa-check-circle text-green-500 text-4xl"></i>
                    <h1 class="text-2xl font-semibold mt-2">Terima kasih atas pesanan Anda!</h1>
                    <p class="text-gray-600 mt-2">Terima kasih telah berbelanja dengan kami. Pesanan Anda sedang diproses. Harap tunggu sampai pesanan Anda tiba, dan jangan lupa beri kami penilaian!</p>
                @endif
            </div>
            
            <div class="space-y-6">
                <!-- Tanggal Transaksi -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Tanggal Transaksi</h2>
                    <p class="text-gray-600">{{ $transaction->created_at->format('l, d F Y (T)') }}</p>
                </div>

                <!-- Metode Pengiriman -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Metode Pengiriman</h2>
                    <p class="text-gray-600">{{ $transaction->courier }}</p>
                </div>

                <!-- Barang Pesanan -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Pesanan Anda</h2>
                    @foreach ($transaction->detailsTransaction as $item)
                        <div class="flex items-center space-x-4 justify-between">
                            <div class="flex space-x-4">
                                <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}" class="w-16 h-16 rounded" />
                                <p class="text-gray-700">{{ $item->product->name }}</p>
                                <p class="text-gray-600">{{ $item->product->color }}</p>
                                <p class="text-gray-600">x{{ $item->quantity }}</p>
                            </div>
                            <p class="ml-auto text-gray-700 font-bold">Rp. {{ number_format($item->total_price, 2) }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Rangkuman Pesanan -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex justify-between text-gray-700">
                        <span>Subtotal</span>
                        <span>Rp. {{ number_format($transaction->subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Biaya Pengiriman</span>
                        <span>Rp. {{ number_format($transaction->shipping_cost, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-gray-700 font-semibold text-lg mt-4">
                        <span>Total Keseluruhan</span>
                        <span>Rp. {{ number_format($transaction->total, 2) }}</span>
                    </div>
                </div>

                <div class="flex justify-center space-x-4 mt-6">
                @if ($transaction->payment_status == 'Pending')
                    <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Bayar Sekarang!</button>
                @else
                    <a href="{{ route('front.review.create', ['transaction_id' => $transaction->id]) }}" class="bg-black text-white py-3 px-6 rounded-md">Beri Penilaian</a>
                @endif
                    <a href="{{ route('front.product') }}" class="bg-black text-white py-3 px-6 rounded-md">Lanjutkan Belanja</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <x-footer/>
@endsection

@push('before-scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script src="{{ asset('js/payment.js') }}"></script>
@endpush
