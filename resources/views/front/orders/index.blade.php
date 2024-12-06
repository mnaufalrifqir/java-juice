@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center mb-6">
            <button class="border border-red-600 text-red-600 rounded-full px-4 py-2 mr-2">All</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">To Pay</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">In Progress</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Delivered</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2">Cancelled</button>
        </div>

        <!-- Order Cards -->
        @foreach($transactions as $transaction)
            <a href="{{ route('front.orders.show', $transaction->id) }}" class="block bg-white p-6 rounded-lg shadow mb-6 hover:bg-gray-100 transition">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        @php
                            $bgColor = match($transaction->shipping_status) {
                                'pending' => 'bg-gray-200 text-gray-600',
                                'in progress' => 'bg-orange-200 text-orange-600',
                                'delivered' => 'bg-green-200 text-green-600',
                                'cancelled' => 'bg-red-200 text-red-600',
                                default => 'bg-gray-200 text-gray-600',
                            };
                        @endphp
                        <span class="rounded-full px-3 py-1 text-sm {{ $bgColor }}">
                            {{ $transaction->shipping_status }}
                        </span>
                        <span class="text-gray-600 ml-4">{{ $transaction->created_at }}</span>
                    </div>
                    <i class="fas fa-chevron-right text-gray-600"></i>
                </div>
                <div class="flex">
                    @if($transaction->detailsTransaction->isNotEmpty())
                        <img src="{{ Storage::url($transaction->detailsTransaction[0]->product->image) }}" alt="{{ $transaction->detailsTransaction[0]->product->description }}" class="w-16 h-16 rounded mr-4"/>
                        <div>
                            <div class="text-red-600 font-bold mb-2">Order ID: {{ $transaction->order_id }}</div>
                            
                            <div class="text-gray-600 mb-2">
                                {{ $transaction->detailsTransaction[0]->product->name }}
                                @if($transaction->detailsTransaction->count() > 1)
                                    & {{ $transaction->detailsTransaction->count() - 1 }} more items
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
