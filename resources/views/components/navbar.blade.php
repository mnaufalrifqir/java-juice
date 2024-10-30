<nav x-data="{navOpen : true}" class="p-4">
    <div class="container mx-auto">
      <div class="flex items-center justify-between h-[43px]">
        <div class="flex items-center order-1">
          <img src="{{asset('assets/logo/logo-app.png')}}" class="h-[43px]" alt="logo">
          <p id="CompanyName" class="font-extrabold text-xl">Java Juice Indonesia</p>
        </div>
        <img @click ="navOpen = !navOpen" src="{{asset('assets/menu/more.svg')}}" class="lg:hidden order-2" alt="navbar">
        <div class="order-2 hidden lg:block">
          <ul class="flex items-center gap-[30px]">
            <li class="{{request()->routeIs('front.index') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.index')}}">Home</a>
            </li>
            <li class="{{request()->routeIs('front.product') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.product')}}">Products</a>
            </li>
            <li class="{{request()->routeIs('front.about') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.about')}}">About</a>
            </li>
            <li class="{{request()->routeIs('front.contact') ? 'text-[#F8A401]' : ''}} font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="{{route('front.contact')}}">Contact</a>
            </li>
          </ul>
        </div>
        <div x-data="{ downOpen: false }" class="order-3 hidden lg:block">
          @auth
          <div class="relative" @click.away="downOpen = false">
            <button @click="downOpen = !downOpen" class="px-8 py-4 font-bold text-[#F8A401] text-sm flex items-center gap-2">
              {{ Auth::user()->name }}
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
          
            <!-- Dropdown menu -->
            <div
              x-show="downOpen"
              x-transition
              class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20 flex flex-col"
            >
              <a href="{{ route('dashboard') }}" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
              <a href="{{ route('cart.index') }}" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cart</a>
              <a href="{{ route('transactions.order') }}" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Order</a>
              <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
              </form>
            </div>
          </div>
          @else
            <a href="{{ route('login') }}" class="px-8 py-4 font-bold text-[#F8A401] text-sm">Sign In</a>
            <a href="{{ route('register') }}" class="px-8 py-4 font-bold text-[#F6F7FA] text-sm">Sign Up</a>
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
          <a href="" class="flex justify-center flex-col items-center gap-1">
            <ion-icon name="home-outline" class="text-grey text-2xl"></ion-icon>
            <span class="text-grey opacity-50 text-base font-bold">Home</span>
          </a>
        </li>
        <li>
          <button class="flex justify-center flex-col items-center gap-1">
            <ion-icon name="bag-handle-outline" class="text-grey opacity-50 text-2xl"></ion-icon>
            <span class="text-grey opacity-50 text-base font-normal">Product</span>
          </button>
        </li>
        <li>
          <button class="flex justify-center flex-col items-center gap-1">
            <ion-icon name="people-circle-outline" class="text-grey opacity-50 text-2xl"></ion-icon>
            <span class="text-grey opacity-50 text-base font-normal">About</span>
          </button>
        </li>
        <li>
          <button class="flex justify-center flex-col items-center gap-1">
            <ion-icon name="mail-outline" class="text-grey opacity-50 text-2xl"></ion-icon>
            <span class="text-grey opacity-50 text-base font-normal">Contact</span>
          </button>
        </li>
        <li>
          <button @click ="open = !open" class="flex justify-center flex-col items-center gap-1">
            <ion-icon name="chevron-up-outline" class="text-grey opacity-50 text-2xl"></ion-icon>
            <span class="text-grey opacity-50 text-base font-normal">More</span>
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
        class="absolute bottom-24 left-1/2 -translate-x-1/2 flex gap-4 w-3/4">
        @auth
        <button class="grow bg-[#F8A401] px-8 py-4 font-bold text-grey rounded-full text-white text-sm">
          {{ Auth::user()->name }}
        </button>
        <form method="POST" action="{{ route('logout') }}" class="grow">
          @csrf
          <button type="submit" class="w-full bg-[#F6F7FA] px-8 py-4 font-bold text-grey rounded-full text-sm">
            Logout
          </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="grow bg-[#F8A401] px-8 py-4 font-bold text-grey rounded-full text-white text-sm">Sign In</a>
        <a href="{{ route('register') }}" class="grow bg-[#F6F7FA] px-8 py-4 font-bold text-grey rounded-full text-white text-sm">Sign Up</a>
        @endauth
      </div>
    </div>
  </nav>