<nav x-data="{navOpen : false}" class="p-4 border-b shadow">
    <div class="container mx-auto">
      <div class="flex items-center justify-between h-[43px]">
        <div class="flex items-center order-1">
          <img src="{{asset('assets/logo/logo-app.png')}}" class="h-[43px]" alt="logo">
          <p id="CompanyName" class="font-extrabold text-xl">Java Juice Indonesia</p>
        </div>
        <img @click ="navOpen = !navOpen" src="{{asset('assets/icon/more.svg')}}" class="lg:hidden order-2" alt="navbar">
        <div class="order-2 hidden lg:block">
          <ul class="flex items-center gap-[30px]">
            <li class="{{request()->routeIs('front.index') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.index')}}">Beranda</a>
            </li>
            <li class="{{request()->routeIs('front.product') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.product')}}">Produk</a>
            </li>
            <li class="{{request()->routeIs('front.about') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.about')}}">Tentang</a>
            </li>
            <li class="{{request()->routeIs('front.contact') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.contact')}}">Kontak</a>
            </li>
          </ul>
        </div>
        <div x-data="{ downOpen: false }" class="order-3 hidden lg:block">
          @auth
          <div class="flex items-center">
            <a href="{{ route('cart.index') }}" class="px-8 py-4 flex text-xl items-center">
              <i class="fa-solid fa-cart-shopping" style="color: #f8a401;"></i>
            </a>
            <div class="relative" @click.away="downOpen = false">
              <button @click="downOpen = !downOpen" class="px-8 py-4 font-bold text-[#F8A401] text-sm flex items-center gap-2">
                {{ Auth::user()->name }}
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </button>
              <div
                x-show="downOpen"
                x-transition
                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20 flex flex-col"
              >
                @role('super_admin')
                <a href="{{ route('dashboard') }}" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                @endrole
                <a href="{{ route('front.orders.index') }}" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pesanan Saya</a>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</button>
                </form>
              </div>
            </div>
          </div>
          @else
          <div class="flex items-center">
            <a href="{{ route('cart.index') }}" class="px-8 py-4 flex text-xl items-center">
              <i class="fa-solid fa-cart-shopping" style="color: #f8a401;"></i>
            </a>
            <a href="{{ route('login') }}" class="px-8 py-4 font-bold text-[#F8A401] text-sm">Masuk</a>
            <a href="{{ route('register') }}" class="px-8 py-4 font-bold text-[#F6F7FA] text-sm">Daftar</a>
          </div>
          @endauth
        </div>
      </div>
    </div>
    <div
      x-show="navOpen"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="opacity-0 scale-90"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-300"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-90"
      x-data="{open : false}"
      class="fixed bottom-0 right-0 left-0 p-4 bg-[#FAF3EA] border lg:hidden z-10">
      <ul class="flex justify-between">
        <li>
          <a href="{{route('front.index')}}" class="flex justify-center flex-col items-center gap-1">
            <i class="fa-solid fa-house"></i>
            <span class="text-grey opacity-50 text-base font-bold">Beranda</span>
          </a>
        </li>
        <li>
          <a href="{{route('front.product')}}" class="flex justify-center flex-col items-center gap-1">
            <i class="fa-solid fa-bag-shopping"></i>
            <span class="text-grey opacity-50 text-base font-normal">Produk</span>
          </a>
        </li>
        <li>
          <a href="{{route('front.about')}}" class="flex justify-center flex-col items-center gap-1">
            <i class="fa-solid fa-circle-info"></i>
            <span class="text-grey opacity-50 text-base font-normal">Tentang</span>
          </a>
        </li>
        <li>
          <a href="{{route('front.contact')}}" class="flex justify-center flex-col items-center gap-1">
            <i class="fa-solid fa-envelope"></i>
            <span class="text-grey opacity-50 text-base font-normal">Kontak</span>
          </a>
        </li>
        <li>
          <button @click ="open = !open" class="flex justify-center flex-col items-center gap-1">
            <i class="fa-solid fa-chevron-up"></i>
            <span class="text-grey opacity-50 text-base font-normal">Selebihnya</span>
          </button>
        </li>
      </ul>
      <div
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute bottom-24 left-0 w-full flex gap-4">
        @auth
          <div class="bg-white rounded-md shadow-lg z-20 flex flex-col w-full">
            @role('super_admin')
            <a href="{{ route('dashboard') }}" class="w-full text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
            @endrole

            <a href="{{ route('cart.index') }}" class="w-full text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keranjang</a>
            <a href="{{ route('front.orders.index') }}" class="w-full text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pesanan Saya</a>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
              @csrf
              <button type="submit" class="w-full text-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Keluar</button>
            </form>
          </div>
        @else
          <a href="{{ route('login') }}" class="grow bg-[#F8A401] px-8 py-4 font-bold text-grey rounded-full text-white text-sm text-center">Masuk</a>
          <a href="{{ route('register') }}" class="grow bg-[#F6F7FA] px-8 py-4 font-bold text-grey rounded-full text-white text-sm text-center">Daftar</a>
        @endauth
      </div>
    </div>
  </nav>