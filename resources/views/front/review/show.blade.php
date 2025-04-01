@extends('front.layouts.app')
@section('content')
    <x-navbar/>
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <i class="fas fa-star text-[#ff9c1a] text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Detail Ulasan Anda</h1>
                <p class="text-gray-600 mt-2">Terima kasih telah memberikan ulasan! Berikut adalah detail umpan balik Anda.</p>
            </div>

            <div class="space-y-6">
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Ulasan Transaksi</h2>
                    <div class="rating-box">
                        <label class="text-gray-700">Rating</label>
                        <div class="stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa-solid fa-star {{ $testimonial->rating >= $i ? 'text-[#ff9c1a]' : 'text-gray-400' }}"></i>
                            @endfor
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-700">Komentar</label>
                        <p class="w-full p-2 border border-gray-300 rounded-lg">{{ $testimonial->comment }}</p>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Ulasan Produk</h2>
                    @foreach ($testimonial->testimonialDetails as $item)
                        <div class="border-b border-gray-200 py-4">
                            <div class="flex items-center space-x-4">
                                <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}" class="w-16 h-16 rounded">
                                <p class="font-semibold text-gray-700">{{ $item->product->name }}</p>
                            </div>
                            <div class="mt-4">
                                <label class="text-gray-700">Rating</label>
                                <div class="stars">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fa-solid fa-star {{ $item->rating >= $i ? 'text-[#ff9c1a]' : 'text-gray-400' }}"></i>
                                    @endfor
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-gray-700">Komentar</label>
                                <p class="w-full p-2 border border-gray-300 rounded-lg">{{ $item->comment }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <x-footer/>
@endsection

@push('after-scripts')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
@endpush
