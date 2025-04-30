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
    <div class="flex flex-col item-center lg:flex-row">
      <div class="lg:w-1/3">
        <img 
          src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
          class="rounded-lg shadow-lg object-cover w-[250px] h-auto lg:w-[500px]"
        />
      </div>
      <div class="lg:w-2/3 lg:pl-10 mt-6 lg:mt-0">
        <h2 class="font-bold text-xl lg:text-3xl">{{ $product->name }}</h2>
        <p class="text-gray-600 mt-2 text-md lg:text-xl">{{ $product->category->name }}</p>
        @if($product->discount)
          <p class="text-gray-600 mt-2 text-md line-through lg:text-2xl">Rp. {{ number_format($product->price, 2) }}</p>
          <p class="text-red-500 text-xl font-bold lg:text-3xl">Rp. {{ number_format($product->current_price, 2) }}</p>
        @else
          <p class="text-gray-600 mt-2 text-2xl">Rp. {{ number_format($product->current_price, 2) }}</p>
        @endif
        <div class="flex items-center mt-4">
          @if ($average_rating)
            <p class="text-md text-gray-600 lg:text-2xl">{{ $average_rating }}</p>
          @else
            <p class="text-md text-gray-600 lg:text-2xl">0</p>
          @endif
          <i class="fas fa-star text-yellow-500 text-md lg:text-xl"></i>
          <span class="text-gray-600 ml-4 text-md lg:text-xl">{{ $testimonials_details->count() }} Ulasan Pelanggan</span>
        </div>
        <div class="flex items-center my-6">
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
        <div class="mt-4">
          <h2 class="font-bold text-md lg:text-xl">Deskripsi Produk</h2>
          <p class="text-gray-600 text-sm lg:text-base">{{ $product->description }}</p>
        </div>
      </div>
    </div>

    <!-- Ulasan Pelanggan -->
    <section class="mt-12">
      <h2 class="text-xl font-bold my-6 lg:text-2xl">Ulasan Pelanggan</h2>
      @if($testimonials_details->count() > 0)
      <div class="relative">
        <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
          @foreach ($testimonials_details as $testimonial)
            <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[20px] p-5">
              <div class="flex items-center gap-3">
                <h3 class="font-semibold text-md lg:text-lg">
                  {{ $testimonial->testimonial->transaction->user->name ?? 'Unknown User' }}
                </h3>
                <div class="stars">
                  @for ($i = 1; $i <= 5; $i++)
                    <i class="text-sm fa-solid fa-star {{ $testimonial->rating >= $i ? 'text-[#ff9c1a]' : 'text-gray-400' }}"></i>
                  @endfor
                </div>
              </div>
              <p class="text-gray-700 text-sm italic">"{{ $testimonial->comment }}"</p>
            </div>
          @endforeach
        </div>
      </div>
      @else
        <div class="text-center">
          <p class="text-gray-600 text-md lg:text-base">Belum ada ulasan</p>
        </div>
      @endif
    </section>
    
    <!-- Anda mungkin juga suka -->
    <section class="mt-12">
      <h2 class="text-xl font-bold mb-6 lg:text-2xl">Anda mungkin juga suka</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
        @foreach($related_products as $related_product)
          <a href="{{ route('front.details', ['product' => $related_product->id]) }}" class="bg-white shadow-lg rounded-lg p-4">
            <img src="{{ Storage::url($related_product->image) }}" alt="{{ $related_product->name }}" class="w-full h-auto object-cover rounded-lg" />
            <h3 class="text-md font-bold mt-4 lg:text-xl">{{ $related_product->name }}</h3>
            <p class="text-sm text-gray-600 mt-2 lg:text-md">{{ $related_product->category->name }}</p>
            @if ($related_product->discount)
              <p class="text-gray-600 mt-2 line-through text-sm lg:text-md">Rp. {{ number_format($related_product->price, 2) }}</p>
              <p class="text-red-500 font-bold text-md lg:text-xl">Rp. {{ number_format($related_product->current_price, 2) }}</p>
            @else
              <p class="text-gray-600 mt-2 text-md lg:text-xl">Rp. {{ number_format($related_product->current_price, 2) }}</p>
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
