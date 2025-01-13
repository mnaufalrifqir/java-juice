@extends('front.layouts.app')
@section('content')
  <x-navbar />
  <x-banner />
  <main class="container mt-20 mx-auto py-8 px-6">
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        {{ session('error') }}
    </div>
    @endif
    <div class="flex flex-col lg:flex-row">
      <div class="lg:w-1/3">
        <img 
          src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
          class="rounded-lg shadow-lg object-cover w-[500px] h-auto"
        />
      </div>
      <div class="lg:w-2/3 lg:pl-10 mt-6 lg:mt-0">
        <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
        <p class="text-gray-600 mt-2 text-xl">{{ $product->category->name }}</p>
        @if($product->discount)
          <p class="text-gray-600 mt-2 text-2xl line-through">Rp. {{ number_format($product->price, 2) }}</p>
          <p class="text-red-500 text-3xl font-bold">Rp. {{ number_format($product->current_price, 2) }}</p>
        @else
          <p class="text-gray-600 mt-2 text-2xl">Rp. {{ number_format($product->current_price, 2) }}</p>
        @endif
        <div class="flex items-center mt-4">
          @if ($average_rating)
            <p class="text-2xl text-gray-600">{{ $average_rating }}</p>
          @else
            <p class="text-2xl text-gray-600">0</p>
          @endif
          <i class="fas fa-star text-yellow-500 text-xl"></i>
          <span class="text-gray-600 ml-4">{{ $testimonials_details->count() }} Ulasan Pelanggan</span>
        </div>
        <p class="text-gray-600 mt-4">{{ $product->description }}</p>
        <div class="flex items-center mt-6">
          <button onclick="decreaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">-</button>
          <input id="product-quantity" type="text" name="quantity" value="1" class="w-12 text-center border-t border-b border-gray-300 mx-2" />
          <button onclick="increaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">+</button>
          @auth
            <form id="add-to-cart-form" action="{{ route('cart.addToCart') }}" method="POST" class="inline-block ml-4">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <input type="hidden" name="quantity" id="form-quantity" value="1">
              <button type="submit" onclick="updateFormQuantity()" class="bg-yellow-500 text-white px-6 py-2 rounded">
                Tambah ke Keranjang
              </button>
            </form>
          @else
            <a href="{{ route('login') }}" class="ml-4 bg-yellow-500 text-white px-6 py-2 rounded">
              Tambah ke Keranjang
            </a>
          @endauth
        </div>
      </div>
    </div>

    <!-- Ulasan Pelanggan -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold mb-6">Ulasan Pelanggan</h2>
      @if($testimonials_details->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          @foreach($testimonials_details as $testimonial)
            <div class="bg-white shadow-lg rounded-lg p-4">
              <p class="text-gray-600">{{ $testimonial->comment }}</p>
              <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                  <div class="flex flex-col ml-4">
                    <p class="font-bold">{{ $testimonial->user->name }}</p>
                  </div>
                </div>
                <div class="flex items-center">
                  @for($i = 0; $i < 5; $i++)
                    @if($i < $testimonial->rating)
                      <i class="fas fa-star text-yellow-500 text-2xl"></i>
                    @else
                      <i class="fas fa-star text-gray-400 text-2xl"></i>
                    @endif
                  @endfor
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="text-center">
          <p class="text-gray-600">Belum ada ulasan</p>
        </div>
      @endif
    </section>
    
    <!-- Anda mungkin juga suka -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold mb-6">Anda mungkin juga suka</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($related_products as $related_product)
          <a href="{{ route('front.details', ['product' => $related_product->id]) }}" class="bg-white shadow-lg rounded-lg p-4">
            <img src="{{ Storage::url($related_product->image) }}" alt="{{ $related_product->name }}" class="w-full h-auto object-cover rounded-lg" />
            <h3 class="text-xl font-bold mt-4">{{ $related_product->name }}</h3>
            <p class="text-gray-600 mt-2">{{ $related_product->category->name }}</p>
            @if ($related_product->discount)
              <p class="text-gray-600 mt-2 text-xl line-through">Rp. {{ number_format($related_product->price, 2) }}</p>
              <p class="text-red-500 text-xl font-bold">Rp. {{ number_format($related_product->current_price, 2) }}</p>
            @else
              <p class="text-gray-600 mt-2 text-xl">Rp. {{ number_format($related_product->current_price, 2) }}</p>
            @endif
          </a>
        @endforeach
      </div>
    </section>
  </main>
  <x-footer />
@endsection

@push('before-scripts')
  <script src="{{asset('js/quantity.js')}}"></script>
@endpush
