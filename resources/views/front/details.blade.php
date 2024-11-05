@extends('front.layouts.app')
@section('content')
  <x-navbar />
  <x-banner />
  <main class="container mt-20 mx-auto py-8 px-6">
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif
    <div class="flex flex-col lg:flex-row">
      <div class="lg:w-1/2">
        <img 
          src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
          class="rounded-lg shadow-lg object-cover w-full h-auto"
          width="600"
          height="600"
        />
      </div>
      <div class="lg:w-1/2 lg:pl-10 mt-6 lg:mt-0">
        <h2 class="text-3xl font-bold">{{ $product->name }}</h2>
        @if($product->category)
        <p class="text-gray-600 mt-2 text-xl">{{ $product->category->name }}</p>
        @endif
        <p class="text-gray-600 mt-2 text-2xl">Rp. {{ number_format($product->price, 2) }}</p>
        <div class="flex items-center mt-4">
          <div class="flex items-center text-yellow-500">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <span class="ml-2 text-gray-600">5 Customer Review</span>
        </div>
        <p class="text-gray-600 mt-4">{{ $product->description }}</p>
        <div class="flex items-center mt-6">
          <!-- Button Minus -->
          <button onclick="decreaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">-</button>
          
          <!-- Quantity Input -->
          <input id="product-quantity" type="text" name="quantity" value="1" class="w-12 text-center border-t border-b border-gray-300 mx-2" />
          
          <!-- Button Plus -->
          <button onclick="increaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">+</button>
          
          @auth
            <!-- Add to Cart Form -->
            <form id="add-to-cart-form" action="{{ route('cart.addToCart') }}" method="POST" class="inline-block ml-4">
              @csrf
              <!-- Hidden Field for Product ID -->
              <input type="hidden" name="product_id" value="{{ $product->id }}">
              <!-- Hidden Field for Quantity -->
              <input type="hidden" name="quantity" id="form-quantity" value="1">
              <button type="submit" onclick="updateFormQuantity()" class="bg-yellow-500 text-white px-6 py-2 rounded">
                Add To Cart
              </button>
            </form>
          @else
            <!-- Redirect to Login if not Authenticated -->
            <a href="{{ route('login') }}" class="ml-4 bg-yellow-500 text-white px-6 py-2 rounded">
              Add To Cart
            </a>
          @endauth
        </div>
      </div>
    </div>
    
    <!-- You may also like -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold mb-6">You may also like</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow-lg rounded-lg p-4 hover:transform transition-transform duration-200">
          <img 
            src="{{ asset('assets/best-products/product-1.jpg') }}" 
            alt="Ceylon Ginger Cinnamon chai tea - Best Seller Product" 
            class="rounded-lg object-cover" 
            width="300" 
            height="300" 
          />
          <h3 class="mt-4 text-lg font-bold">Ceylon Ginger Cinnamon chai tea</h3>
          <p class="text-gray-600">Rp. 250,000.00</p>
        </div>
        
        <div class="bg-white shadow-lg rounded-lg p-4 hover:transform transition-transform duration-200">
          <img 
            src="{{ asset('assets/best-products/product-2.jpg') }}" 
            alt="Ceylon Ginger Cinnamon chai tea - Best Seller Product" 
            class="rounded-lg object-cover" 
            width="300" 
            height="300" 
          />
          <h3 class="mt-4 text-lg font-bold">Ceylon Ginger Cinnamon chai tea</h3>
          <p class="text-gray-600">Rp. 250,000.00</p>
        </div>
        
        <div class="bg-white shadow-lg rounded-lg p-4 hover:transform transition-transform duration-200">
          <img 
            src="{{ asset('assets/best-products/product-3.jpg') }}" 
            alt="Ceylon Ginger Cinnamon chai tea - Best Seller Product" 
            class="rounded-lg object-cover" 
            width="300" 
            height="300" 
          />
          <h3 class="mt-4 text-lg font-bold">Ceylon Ginger Cinnamon chai tea</h3>
          <p class="text-gray-600">Rp. 250,000.00</p>
        </div>
      </div>
    </section>
  </main>
  <x-footer />
@endsection

@push('before-scripts')
  <script src="{{asset('js/quantity.js')}}"></script>
@endpush
