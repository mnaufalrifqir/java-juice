@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Konten Utama -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                @if ($transaction->payment_status == 'Pending')
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
                    @if ($transaction->tracking_number)
                        <p class="text-gray-600">Nomor Resi: {{ $transaction->tracking_number }}</p>
                    @else
                        <p class="text-gray-600">Nomor Resi: Belum Tersedia</p>
                    @endif
                    @if ($transaction->tracking_number && str_contains($transaction->courier, 'jne'))
                        <div class="flex items-center space-x-1">
                            <p class="text-gray-600">Lacak Resi: </p>
                            <a href="https://jne.co.id/tracking-package" target="_blank" class="text-blue-500 hover:underline">Klik Disini</a>
                        </div>
                    @elseif ($transaction->tracking_number && str_contains($transaction->courier, 'tiki'))
                        <div class="flex items-center space-x-1">
                            <p class="text-gray-600">Lacak Resi: </p>
                            <a href="https://tiki.id/id/track" target="_blank" class="text-blue-500 hover:underline">Klik Disini</a>
                        </div>
                    @elseif ($transaction->tracking_number && str_contains($transaction->courier, 'pos'))
                        <div class="flex items-center space-x-1">
                            <p class="text-gray-600">Lacak Resi: </p>
                            <a href="https://www.posindonesia.co.id/id/tracking" target="_blank" class="text-blue-500 hover:underline">Klik Disini</a>
                        </div>
                    @endif
                </div>

                <!-- Barang Pesanan -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700 mb-2">Pesanan Anda</h2>
                    @foreach ($transaction->detailsTransaction as $item)
                        <div class="flex items-center space-x-4 justify-between">
                            <div class="flex space-x-4">
                                <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}" class="w-16 h-16 rounded" />
                                <p class="text-gray-700">{{ $item->product->name }}</p>
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
                @if ($transaction->review_status == 0)
                    @if ($transaction->payment_status == 'Pending' && $transaction->shipping_status == 'Pending')
                        <a href="{{ $transaction->payment_url }}" class="bg-blue-500 text-white py-3 px-6 rounded-md">Bayar Sekarang!</a>
                    @elseif ($transaction->payment_status == 'Success' && $transaction->shipping_status == 'Shipped')
                        <form action="{{ route('front.orders.delivered', $transaction->id) }}" method="POST" class="inline-block">
                            @csrf
                            <button type="submit" class="bg-green-500 text-white py-3 px-6 rounded-md">Pesanan Diterima</button>
                        </form>
                    @elseif ($transaction->payment_status == 'Success' && $transaction->shipping_status == 'Delivered')
                        <a href="{{ route('front.review.create', ['transaction_id' => $transaction->id]) }}" class="bg-[#f8a401] text-white py-3 px-6 rounded-md">Beri Penilaian</a>
                    @else
                        <a href="{{ route('front.orders.index') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md">Kembali</a>
                    @endif
                @else
                    <a href="{{ route('front.review.show', ['transaction_id' => $transaction->id]) }}" class="bg-blue-500 text-white py-3 px-6 rounded-md">Lihat Penilaian</a>
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
