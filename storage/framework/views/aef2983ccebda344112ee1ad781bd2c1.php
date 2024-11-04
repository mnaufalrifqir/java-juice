<?php $__env->startSection('content'); ?>
  <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
  <?php if (isset($component)) { $__componentOriginala038281ce129721dd88a49670137597b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala038281ce129721dd88a49670137597b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hero-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('hero-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala038281ce129721dd88a49670137597b)): ?>
<?php $attributes = $__attributesOriginala038281ce129721dd88a49670137597b; ?>
<?php unset($__attributesOriginala038281ce129721dd88a49670137597b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala038281ce129721dd88a49670137597b)): ?>
<?php $component = $__componentOriginala038281ce129721dd88a49670137597b; ?>
<?php unset($__componentOriginala038281ce129721dd88a49670137597b); ?>
<?php endif; ?>
  <div id="BestSeller" class="content w-full flex flex-col gap-[30px] justify-center mt-20">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Best Seller</h2>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="center flex justify-center gap-[100px] overflow-hidden">
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-1.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-2.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-3.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-4.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-5.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex-shrink-0 flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
      </div>
    </div>
  </div>
  <div id="NewProducts" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">New Products</h2>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-1.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-2.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-3.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-4.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-5.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
      </div>
    </div>
  </div>
  <div id="Sale" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Sale</h2>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-1.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-2.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-3.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-4.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-5.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
        <div class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(asset('assets/best-products/product-6.jpg')); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
        </div>
      </div>
    </div>
  </div>
  <div id="OurPartners" class="bg-[#FAF3EA] w-full mt-20">
    <div class="content mx-auto py-10 px-20">
      <h2 class="font-bold text-4xl leading-[45px] text-[#3a3a3a] text-center mb-10">Our Partners</h2>
      <div class="flex flex-wrap items-center justify-between">
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="<?php echo e(asset('assets/partners/adhimix-logo.png')); ?>" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="<?php echo e(asset('assets/partners/adira-logo.png')); ?>" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="<?php echo e(asset('assets/partners/holcim-logo.png')); ?>" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
            <img src="<?php echo e(asset('assets/partners/mnc-logo.png')); ?>" class="object-contain w-full h-full" alt="icon">
        </div>
        <div class="card w-[200px] flex flex-col items-center p-4 text-center">
          <img src="<?php echo e(asset('assets/partners/telkomsel-logo.png')); ?>" class="object-contain w-full h-full" alt="icon">
        </div>
      </div>
    </div>
  </div>
  <div id="Testimonials" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
    <div class="flex justify-between">
      <div class="flex flex-col gap-[14px] items-start p-4">
        <h2 class="font-bold text-2xl leading-[45px] text-black">Our Customer Feedback</h2>
        <p class="text-lg">Don't take our word for it. Trust our customers</p>
      </div>
      <div class="space-x-2 my-7 hidden sm:block p-4">
        <button class="px-4 py-2 text-gray-500 bg-gray-200 rounded-lg hover:bg-gray-300">
          <span class="mr-1"><</span> Previous
        </button>
        <button class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">
          Next <span class="ml-1">></span>
        </button>
      </div>
    </div>
    <div class="relative">
      <div id="slider" data-slick='{"slidesToScroll": 3}' class="responsive flex flex-wrap items-center justify-between p-[10px]">
        <div class="card flex flex-col p-4 space-x-4 border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 1">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Floyd Miles</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 2">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Ronald Richards</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 3">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Savannah Nguyen</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 1">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Floyd Miles</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 2">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Ronald Richards</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        </div>
        <div class="card flex flex-col p-4 mx-auto border rounded-lg shadow-md">
          <div class="flex items-center mb-2">
            <img class="w-12 h-12 rounded-full" src="https://via.placeholder.com/48" alt="Customer 3">
            <div class="ml-3">
              <h3 class="font-bold text-gray-800">Savannah Nguyen</h3>
              <div class="flex">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l5.09 3.18L13.82 12l5.18-4H9.64l-1.82-5L10 15z"/></svg>
              </div>
            </div>
          </div>
          <p class="text-sm text-gray-500">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
        </div>
      </div>
    </div>
  </div>
  <div id="Stats" class="bg-[#FAF3EA] w-full mt-20">
    <div class="container max-w-[1130px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="<?php echo e(asset('assets/icons/trophy-1.png')); ?>" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">High Quality</p>
            <p class="text-sm text-[#3a3a3a]">crafted from top materials</p>
          </div>
        </div>
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="<?php echo e(asset('assets/icons/guarantee.png')); ?>" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">Warranty Protection</p>
            <p class="text-sm text-[#3a3a3a]">Over 2 years</p>
          </div>
        </div>
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="<?php echo e(asset('assets/icons/shipping.png')); ?>" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">Free Shipping</p>
            <p class="text-sm text-[#3a3a3a]">Order over 150 $</p>
          </div>
        </div>
        <div class="flex items-center p-4">
          <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
              <img src="<?php echo e(asset('assets/icons/customer-support.png')); ?>" class="object-contain w-full h-full" alt="icon">
          </div>
          <div class="flex flex-col">
            <p class="font-extrabold text-xl leading-[30px] text-black">24 / 7 Support</p>
            <p class="text-sm text-[#3a3a3a]">Dedicated support</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('before-scripts'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="<?php echo e(asset('/js/sw.js')); ?>"></script>
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
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
  <link href="<?php echo e(asset('css/slick.css')); ?>" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="<?php echo e(asset('js/slider.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Backend\java-juice\resources\views/front/index.blade.php ENDPATH**/ ?>