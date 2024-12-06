@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Main Content -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <i class="fas fa-check-circle text-green-500 text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Thanks for your order!</h1>
                <p class="text-gray-600">The order confirmation has been sent to {{ $transaction->customer_email }}</p>
            </div>
            
            <div class="space-y-6">
                <!-- Transaction Date -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Transaction Date</h2>
                    <p class="text-gray-600">{{ $transaction->created_at->format('l, F d, Y (T)') }}</p>
                </div>

                <!-- Shipping Method -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Shipping Method</h2>
                    <p class="text-gray-600">{{ $transaction->courier }}</p>
                    <a href="#" class="text-blue-500 underline">TRACK ORDER</a>
                </div>

                <!-- Order Items -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Your Order</h2>
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

                <!-- Order Summary -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex justify-between text-gray-700">
                        <span>Subtotal</span>
                        <span>Rp. {{ number_format($transaction->subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Shipping Cost</span>
                        <span>Rp. {{ number_format($transaction->shipping_cost, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-gray-700 font-semibold text-lg mt-4">
                        <span>Grand Total</span>
                        <span>Rp. {{ number_format($transaction->total, 2) }}</span>
                    </div>
                </div>

                @if ($transaction->payment_status == 'pending')
                    <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Pay Now!</button>
                @endif
                <!-- Continue Shopping Button -->
                <div class="text-center mt-6">
                    <a href="{{ route('front.product') }}" class="bg-black text-white py-3 px-6 rounded-full">Continue shopping</a>
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
