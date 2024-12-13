@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Main Content -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <i class="fas fa-comment-dots text-blue-500 text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Your Review Details</h1>
                <p class="text-gray-600 mt-2">Here are the reviews you provided for this transaction and the products you purchased.</p>
            </div>

            <div class="space-y-6">
                <!-- Transaction Review -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Transaction Review</h2>
                    <div class="mt-4">
                        <p class="text-gray-700"><span class="font-semibold">Rating:</span> 
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star {{ $i <= $transactionReview->rating ? 'text-yellow-500' : 'text-gray-400' }}"></i>
                            @endfor
                        </p>
                        <p class="mt-2 text-gray-700"><span class="font-semibold">Comment:</span> {{ $transactionReview->comment }}</p>
                    </div>
                </div>

                <!-- Product Reviews -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Product Reviews</h2>
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
                                <p class="mt-2 text-gray-700"><span class="font-semibold">Comment:</span> {{ $review->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Back Button -->
                <div class="text-center mt-6">
                    <a href="{{ route('transactions.index') }}" class="bg-blue-500 text-white py-3 px-6 rounded-md font-semibold">Back to Transactions</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <x-footer/>
@endsection
