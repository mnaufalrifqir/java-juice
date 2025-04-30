@extends('front.layouts.app')
@section('content')
  <x-navbar/>
  <div class="content">
    <div class="slider">
      @foreach ($hero_sections as $hero_section)
        <div>
          <img src="{{ Storage::url($hero_section->image) }}" alt="Banner Image" class="w-full h-auto">
        </div>
      @endforeach
    </div>
  </div>
  <div id="BestSeller" class="content w-full flex flex-col gap-[30px] justify-center mt-10">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-1 lg:gap-[14px]">
        <h2 class="font-bold text-2xl leading-[45px] lg:text-4xl">Produk Terlaris</h2>
        <p class="text-sm lg:text-base">Pilihan Terbaik yang Paling Dicintai oleh Pelanggan!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="center flex justify-center gap-[100px] overflow-hidden">
        @foreach ($best_sellers as $best_seller)
          <a href="{{ route('front.details', ['product' => $best_seller->id]) }}" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
            <img src="{{ Storage::url($best_seller->image) }}" class="object-cover object-center w-full h-full" alt="thumbnails">
            <div class="p-4">
              <h2 class="text-md font-bold lg:text-xl">{{ $best_seller->name }}</h2>
              <p class="text-sm text-gray-500 lg:text-md">{{ $best_seller->category->name }}</p>
              @if ($best_seller->discount)
                <p class="text-sm text-gray-400 line-through lg:text-md">Rp {{ number_format($best_seller->price, 0, ',', '.') }}</p>
                <p class="text-md font-bold text-gray-900 lg:text-xl">Rp {{ number_format($best_seller->current_price, 0, ',', '.') }}</p>
              @else
                <p class="text-md font-bold text-gray-900 lg:text-xl lg:mb-5">Rp {{ number_format($best_seller->price, 0, ',', '.') }}</p>
              @endif
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
  <div id="NewProducts" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-1 lg:gap-[14px]">
        <h2 class="font-bold text-2xl lg:text-4xl leading-[45px]">Produk Terbaru</h2>
        <p class="text-sm lg:text-base">Nikmati Sensasi Rasa Baru dari Koleksi Liquid Vape Kami!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        @foreach ($new_products as $new_product)
          <a href="{{ route('front.details', ['product' => $new_product->id]) }}" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
            <img src="{{ Storage::url($new_product->image) }}" class="object-cover object-center w-full h-full" alt="thumbnails">
            <div class="p-4">
              <h2 class="text-md lg:text-xl font-bold">{{ $new_product->name }}</h2>
              <p class="text-sm lg:text-md text-gray-500">{{ $new_product->category->name }}</p>
              @if ($new_product->discount)
                <p class="text-sm lg:text-md text-gray-400 line-through">Rp {{ number_format($new_product->price, 0, ',', '.') }}</p>
                <p class="text-md lg:text-xl font-bold text-gray-900">Rp {{ number_format($new_product->current_price, 0, ',', '.') }}</p>
              @else
                <p class="lg:text-xl text-md font-bold text-gray-900 lg:md-5">Rp {{ number_format($new_product->price, 0, ',', '.') }}</p>
              @endif
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
  <div id="Sale" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-1 lg:gap-[14px]">
        <h2 class="font-bold text-2xl lg:text-4xl leading-[45px]">Penawaran Spesial</h2>
        <p class="text-sm lg:text-base">Cita rasa premium, kini lebih terjangkau dari sebelumnya. Jangan sampai ketinggalan!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        @foreach ($sale_products as $sale_product)
          <a href="{{ route('front.details', ['product' => $sale_product->id]) }}" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
            <img src="{{ Storage::url($sale_product->image) }}" class="object-cover object-center w-full h-full" alt="thumbnails">
            <div class="p-4">
              <h2 class="text-md lg:text-xl font-bold">{{ $sale_product->name }}</h2>
              <p class="text-sm lg:text-md text-gray-500">{{ $sale_product->category->name }}</p>
              <p class="text-sm lg:text-md text-gray-400 line-through">Rp {{ number_format($sale_product->price, 0, ',', '.') }}</p>
              <p class="lg:text-xl text-md font-bold text-gray-900">Rp {{ number_format($sale_product->current_price, 0, ',', '.') }}</p>
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
  <div id="OurPartners" class="bg-[#FAF3EA] w-full mt-10">
    <div class="container max-w-[1130px] mx-auto py-10">
      <div class="flex flex-col gap-1 lg:gap-[14px] items-center text-center mb-10">
        <h2 class="font-bold text-2xl lg:text-4xl leading-[45px] text-[#3a3a3a] text-center">Mitra Kami</h2>
        <p class="text-sm lg:text-base">Bersama Mitra Terpercaya untuk Memberikan Kualitas Terbaik!</p>
      </div>
      <div class="flex flex-wrap items-center justify-between">
        @foreach ($partners as $partner)
          <div class="card w-[180px] h-[90px] flex items-center justify-center p-4">
            <img src="{{ Storage::url($partner->logo) }}" class="object-contain w-full h-full" alt="Partner Logo">
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div id="Testimonials" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10">
    <div class="flex justify-between">
      <div class="flex flex-col gap-[14px] items-start p-4">
        <h2 class="font-bold text-2xl lg:text-4xl leading-[45px] text-black">Ulasan Pelanggan Kami</h2>
        <p class="text-sm lg:text-base">Dengarkan Cerita Mereka Tentang Pengalaman Luar Biasa dengan Produk Kami!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        @foreach ($testimonials as $testimonial)
          <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[20px] p-5">
            <div class="flex">
              <div>
                <h3 class="font-semibold text-md lg:text-lg">
                  {{ $testimonial->transaction->user->name ?? 'Unknown User' }}
                </h3>
                @foreach ($testimonial->testimonialDetails as $item)
                  <p class="text-sm text-gray-500">{{ $item->product->name }}{{ !$loop->last ? ', ' : '' }}</p>
                @endforeach
              </div>
            </div>
            <p class="text-gray-700 text-sm italic">"{{ $testimonial->comment }}"</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div id="Stats" class="bg-[#FAF3EA] w-full mt-10">
    <div class="container max-w-[1130px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">
        @foreach ($statistics as $statistic)
          <div class="flex items-center p-4 max-w-[270px]">
            <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
                <img src="{{ Storage::url($statistic->icon) }}" class="object-contain w-full h-full" alt="icon">
            </div>
            <div class="flex flex-col">
              <p class="font-extrabold text-xl leading-[30px] text-black">{{$statistic->title}}</p>
              <p class="text-sm text-[#3a3a3a]">{{$statistic->description}}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <x-footer/>
@endsection

@push('before-scripts')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="{{ asset('/js/sw.js') }}"></script>
  <script>
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("/sw.js").then(
      (registration) => {
        console.log("Service worker registration succeeded:", registration);
      },
      (error) => {
        console.error(`Service worker registration failed: ${error}`);
      },
    );
  } else {
    console.error("Service workers are not supported.");
  }
  </script>
@endpush

@push('after-scripts')
  <link href="{{asset('css/slick.css')}}" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="{{asset('js/slider.js')}}"></script>
@endpush