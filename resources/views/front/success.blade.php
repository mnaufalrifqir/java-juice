@extends('front.layouts.app')
@section('content')
<div class="bg-gray-100 min-h-screen flex items-center justify-center overflow-x-hidden">
    <div class="text-center">
        <img 
            src="https://storage.googleapis.com/a1aa/image/Tw0jqHdKHarvMVQYRf9hZxZky0WtIAol4pv3KHZyG6eUzBuTA.jpg"
            alt="Shopping bag icon"
            class="mx-auto mb-6"
            width="100"
            height="100"
        />
        <h1 class="text-2xl font-semibold mb-2">Transaction Processed!</h1>
        <p class="text-gray-600 mb-6">
            Your transaction has been processed successfully. Thank you for shopping with us!
        </p>
        <div class="space-y-4">
            <a href="{{ route('front.orders.index') }}" class="bg-green-500 text-white py-2 px-4 rounded">My Order</a>
            <a href="{{ route('front.product') }}" class="bg-gray-300 text-gray-600 py-2 px-4 rounded">Go To Shopping</a>
        </div>
    </div>
</div>
@endsection
