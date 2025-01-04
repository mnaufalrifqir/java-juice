@extends('front.layouts.app')
@section('content')
  <x-navbar />
  <x-banner />
  <main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">
      Product
    </h1>
    <nav class="text-gray-500 mb-8">
      <a class="hover:text-gray-700" href="#">
        Beranda
      </a>
      &gt;
      <span>
        Produk
      </span>
    </nav>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      @forelse($products as $product)
        <a href="{{ route('front.details', ['product' => $product->id]) }}" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="{{ Storage::url($product->image) }}" class="object-cover object-center w-full h-full" alt="thumbnails">
          <div class="p-4">
            <h2 class="text-xl font-bold">{{ $product->name }}</h2>
            <p class="text-gray-500">{{ $product->category->name }}</p>
            <p class="text-sm text-gray-400 line-through">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="text-xl font-bold text-gray-900">Rp {{ number_format($product->current_price, 0, ',', '.') }}</p>
          </div>
        </a>
      @empty
      <p>No products found.</p>
      @endforelse
    </div>
  
    <div class="flex justify-center mt-8">
      @if(!$products->onFirstPage())
      <a href="{{ $products->previousPageUrl() }}#product-list" class="px-4 py-2 bg-gray-300 rounded-md">Previous</a>
      @endif

      @for ($page = 1; $page <= $products->lastPage(); $page++)
        @if ($page == $products->currentPage())
          <span class="px-4 py-2 bg-yellow-500 text-white rounded-md">{{ $page }}</span>
        @else
          <a href="{{ $products->url($page) }}#product-list" class="px-4 py-2 mx-2 bg-gray-300 rounded-md">{{ $page }}</a>
        @endif
      @endfor

      @if($products->hasMorePages())
      <a href="{{ $products->nextPageUrl() }}#product-list" class="px-4 py-2 bg-gray-300 rounded-md">Next</a>
      @endif
    </div>
  </main>
  <x-footer />
@endsection

@push('before-scripts')
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      if (window.location.hash === "#product-list") {
        document.getElementById("product-list").scrollIntoView({ behavior: "smooth" });
      }
    });
  </script>
@endpush
