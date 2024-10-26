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
   <main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">
     Product
    </h1>
    <nav class="text-gray-500 mb-8">
     <a class="hover:text-gray-700" href="#">
      Home
     </a>
     &gt;
     <span>
      Product
     </span>
    </nav>
    <!-- Product Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
     <!-- Product Card -->
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Syltherine
       </h2>
       <p class="text-gray-500">
        Stylish cafe chair
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 2.500.000
       </p>
       <p class="text-sm text-gray-400 line-through">
        Rp 3.500.000
       </p>
      </div>
     </div>
     <!-- Repeat Product Cards -->
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Leviosa
       </h2>
       <p class="text-gray-500">
        Stylish cafe chair
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 2.500.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Lolito
       </h2>
       <p class="text-gray-500">
        Luxury big sofa
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 7.000.000
       </p>
       <p class="text-sm text-gray-400 line-through">
        Rp 14.000.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Respira
       </h2>
       <p class="text-gray-500">
        Outdoor bar table and stool
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 500.000
       </p>
      </div>
     </div>
     <!-- Repeat Product Cards -->
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Syltherine
       </h2>
       <p class="text-gray-500">
        Stylish cafe chair
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 2.500.000
       </p>
       <p class="text-sm text-gray-400 line-through">
        Rp 3.500.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Leviosa
       </h2>
       <p class="text-gray-500">
        Stylish cafe chair
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 2.500.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Lolito
       </h2>
       <p class="text-gray-500">
        Luxury big sofa
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 7.000.000
       </p>
       <p class="text-sm text-gray-400 line-through">
        Rp 14.000.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Respira
       </h2>
       <p class="text-gray-500">
        Outdoor bar table and stool
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 500.000
       </p>
      </div>
     </div>
     <!-- Repeat Product Cards -->
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Syltherine
       </h2>
       <p class="text-gray-500">
        Stylish cafe chair
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 2.500.000
       </p>
       <p class="text-sm text-gray-400 line-through">
        Rp 3.500.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Leviosa
       </h2>
       <p class="text-gray-500">
        Stylish cafe chair
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 2.500.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Lolito
       </h2>
       <p class="text-gray-500">
        Luxury big sofa
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 7.000.000
       </p>
       <p class="text-sm text-gray-400 line-through">
        Rp 14.000.000
       </p>
      </div>
     </div>
     <div class="bg-white shadow rounded-lg overflow-hidden">
      <img alt="Product Image" class="w-full h-48 object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/HoGFJlutTRq2A9rLVZiP1HlgYLWEHlRPXp6eI1aYqkhfnsoTA.jpg" width="300"/>
      <div class="p-4">
       <h2 class="text-lg font-bold">
        Respira
       </h2>
       <p class="text-gray-500">
        Outdoor bar table and stool
       </p>
       <p class="text-lg font-bold text-gray-900">
        Rp 500.000
       </p>
      </div>
     </div>
    </div>
    <!-- Pagination -->
    <div class="flex justify-center mt-8">
     <nav class="inline-flex space-x-2">
      <a class="px-4 py-2 bg-yellow-500 text-white rounded" href="#">
       1
      </a>
      <a class="px-4 py-2 bg-gray-200 text-gray-700 rounded" href="#">
       2
      </a>
      <a class="px-4 py-2 bg-gray-200 text-gray-700 rounded" href="#">
       3
      </a>
      <a class="px-4 py-2 bg-gray-200 text-gray-700 rounded" href="#">
       Next
      </a>
     </nav>
    </div>
   </main>
   <!-- Footer -->
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
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Backend\java-juice\resources\views/front/products.blade.php ENDPATH**/ ?>