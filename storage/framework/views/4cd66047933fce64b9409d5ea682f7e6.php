<nav x-data="{navOpen : true}" class="p-4">
    <div class="container mx-auto">
      <div class="flex items-center justify-between h-[43px]">
        <div class="flex items-center order-1">
          <img src="<?php echo e(asset('assets/logo/logo-app.png')); ?>" class="h-[43px]" alt="logo">
          <p id="CompanyName" class="font-extrabold text-xl">Java Juice Indonesia</p>
        </div>
        <img @click ="navOpen = !navOpen" src="<?php echo e(asset('assets/menu/more.svg')); ?>" class="lg:hidden order-2" alt="navbar">
        <div class="order-2 hidden lg:block">
          <ul class="flex items-center gap-[30px]">
            <li class="<?php echo e(request()->routeIs('front.index') ? 'text-[#F8A401]' : ''); ?> font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="<?php echo e(route('front.index')); ?>">Home</a>
            </li>
            <li class="<?php echo e(request()->routeIs('front.product') ? 'text-[#F8A401]' : ''); ?> font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="<?php echo e(route('front.product')); ?>">Products</a>
            </li>
            <li class="<?php echo e(request()->routeIs('front.about') ? 'text-[#F8A401]' : ''); ?> font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="<?php echo e(route('front.about')); ?>">About</a>
            </li>
            <li class="<?php echo e(request()->routeIs('front.contact') ? 'text-[#F8A401]' : ''); ?> font-semibold hover:text-[#F8A401] transition-all duration-300">
              <a href="<?php echo e(route('front.contact')); ?>">Contact</a>
            </li>
          </ul>
        </div>
        <div class="order-3 hidden lg:block">
          <button class="px-8 py-4 font-bold text-[#F8A401] text-sm">Sign In</button>
          <button class="px-8 py-4 font-bold text-[#F6F7FA] text-sm">Sign Up</button>
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
        x-show = "open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute bottom-24 left-1/2 -translate-x-1/2 flex gap-4 w-3/4">
        <button class="grow bg-[#F8A401] px-8 py-4 font-bold text-grey rounded-full text-white text-sm">Sign In</button>
        <button class="grow bg-[#F6F7FA] px-8 py-4 font-bold text-grey rounded-full text-white text-sm">Sign Up</button>
      </div>
    </div>
  </nav><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/components/navbar.blade.php ENDPATH**/ ?>