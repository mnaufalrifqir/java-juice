@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <!-- Main Content -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <i class="fas fa-star text-[#ff9c1a] text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Leave Your Feedback</h1>
                <p class="text-gray-600 mt-2">We value your feedback! Please rate and review your transaction and purchased products.</p>
            </div>

            <form id="feedback-form" method="POST" action="{{ route('front.review.store', $transaction->id) }}">
                @csrf
                <div class="space-y-6">
                    <!-- Transaction Feedback -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="font-semibold text-gray-700">Transaction Feedback</h2>
                        <div class="rating-box">
                            <label class="text-gray-700">Rating</label>
                            <div class="stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fa-solid fa-star text-gray-400" data-value="{{ $i }}" data-type="transaction"></i>
                                @endfor
                            </div>
                            <input type="hidden" name="transaction[rating]" id="transaction_rating">
                        </div>
                        <div class="mt-4">
                            <label class="text-gray-700">Comment</label>
                            <textarea name="transaction[comment]" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"></textarea>
                        </div>
                    </div>

                    <!-- Product Feedback -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="font-semibold text-gray-700">Product Feedback</h2>
                        @foreach ($transaction->detailsTransaction as $item)
                            <div class="border-b border-gray-200 py-4">
                                <div class="flex items-center space-x-4">
                                    <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}" class="w-16 h-16 rounded">
                                    <input type="hidden" name="products[{{ $item->product_id }}][details_transaction_id]" value="{{ $item->id }}">
                                    <p class="font-semibold text-gray-700">{{ $item->product->name }}</p>
                                </div>
                                <div class="mt-4">
                                    <label class="text-gray-700">Rating</label>
                                    <div class="stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa-solid fa-star text-gray-400" data-value="{{ $i }}" data-product="{{ $item->id }}"></i>
                                        @endfor
                                    </div>
                                    <input type="hidden" name="products[{{ $item->product_id }}][rating]" id="product_rating_{{ $item->id }}">
                                </div>
                                <div class="mt-4">
                                    <label class="text-gray-700">Comment</label>
                                    <textarea name="products[{{ $item->product_id }}][comment]" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"></textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-6">
                        <button type="submit" class="bg-blue-500 text-white py-3 px-6 rounded-md font-semibold">
                            Submit All Feedback
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <x-footer/>
@endsection

@push('after-scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="{{asset('js/rating.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/rating.css')}}"/>
@endpush
