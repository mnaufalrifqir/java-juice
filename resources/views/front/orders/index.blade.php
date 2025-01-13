@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Konten Utama -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center mb-6">
            <button class="border border-red-600 text-red-600 rounded-full px-4 py-2 mr-2">Semua</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Pembayaran</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Sedang Diproses</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Dikirim</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2">Dibatalkan</button>
        </div>

        <!-- Kartu Pesanan -->
        @foreach($transactions as $transaction)
            <a href="{{ route('front.orders.show', $transaction->id) }}" class="block bg-white p-6 rounded-lg shadow mb-6 hover:bg-gray-100 transition">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        @php
                            $bgColor = match($transaction->shipping_status) {
                                'Pending' => 'bg-gray-200 text-gray-600',
                                'In Progress' => 'bg-orange-200 text-orange-600',
                                'Delivered' => 'bg-green-200 text-green-600',
                                'Cancelled' => 'bg-red-200 text-red-600',
                                default => 'bg-gray-200 text-gray-600',
                            };
                        @endphp
                        <span class="rounded-full px-3 py-1 text-sm {{ $bgColor }}">
                            {{ $transaction->shipping_status }}
                        </span>
                        <span class="text-gray-600 ml-4">{{ $transaction->created_at->format('l, d F Y (T)') }}</span>
                    </div>
                    <i class="fas fa-chevron-right text-gray-600"></i>
                </div>
                <div class="flex">
                    @if($transaction->detailsTransaction->isNotEmpty())
                        <img src="{{ Storage::url($transaction->detailsTransaction[0]->product->image) }}" alt="{{ $transaction->detailsTransaction[0]->product->description }}" class="w-16 h-16 rounded mr-4"/>
                        <div>
                            <div class="text-red-600 font-bold mb-2">ID Pesanan: {{ $transaction->order_id }}</div>
                            
                            <div class="text-gray-600 mb-2">
                                {{ $transaction->detailsTransaction[0]->product->name }}
                                @if($transaction->detailsTransaction->count() > 1)
                                    & {{ $transaction->detailsTransaction->count() - 1 }} item lainnya
                                @endif
                            </div>
                            
                            <div class="text-gray-600 font-bold">Rp. {{ number_format($transaction->total, 2) }}</div>
                        </div>
                    @endif
                </div>
            </a>
        @endforeach
    </div>
    <x-footer/>
@endsection
