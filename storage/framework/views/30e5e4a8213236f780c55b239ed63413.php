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
  <?php if (isset($component)) { $__componentOriginalff9615640ecc9fe720b9f7641382872b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff9615640ecc9fe720b9f7641382872b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $attributes = $__attributesOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__attributesOriginalff9615640ecc9fe720b9f7641382872b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff9615640ecc9fe720b9f7641382872b)): ?>
<?php $component = $__componentOriginalff9615640ecc9fe720b9f7641382872b; ?>
<?php unset($__componentOriginalff9615640ecc9fe720b9f7641382872b); ?>
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
      <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <a href="<?php echo e(route('front.details', ['product' => $product->id])); ?>" class="bg-white shadow rounded-lg overflow-hidden">
          <img alt="Product Image" class="w-full h-auto object-cover" src="<?php echo e(Storage::url($product->image)); ?>" />
          <div class="p-4">
              <h2 class="text-lg font-bold">
                  <?php echo e($product->name); ?>

              </h2>
              <p class="text-gray-500">
                  <?php echo e($product->category->name); ?>

              </p>
              <p class="text-lg font-bold text-gray-900">
                  Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?>

              </p>
              <?php if($product->discount): ?>
              <p class="text-sm text-gray-400 line-through">
                  Rp <?php echo e(number_format($product->discount, 0, ',', '.')); ?>

              </p>
              <?php endif; ?>
          </div>
      </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <p>No products found.</p>
      <?php endif; ?>
    </div>
  
    <!-- Pagination -->
    <div class="flex justify-center mt-8">
      <!-- Previous Page Link -->
      <?php if(!$products->onFirstPage()): ?>
      <a href="<?php echo e($products->previousPageUrl()); ?>#product-list" class="px-4 py-2 bg-gray-300 rounded-md">Previous</a>
      <?php endif; ?>

      <!-- Page Numbers -->
      <?php for($page = 1; $page <= $products->lastPage(); $page++): ?>
      <?php if($page == $products->currentPage()): ?>
      <span class="px-4 py-2 bg-yellow-500 text-white rounded-md"><?php echo e($page); ?></span>
      <?php else: ?>
      <a href="<?php echo e($products->url($page)); ?>#product-list" class="px-4 py-2 mx-2 bg-gray-300 rounded-md"><?php echo e($page); ?></a>
      <?php endif; ?>
      <?php endfor; ?>

      <!-- Next Page Link -->
      <?php if($products->hasMorePages()): ?>
      <a href="<?php echo e($products->nextPageUrl()); ?>#product-list" class="px-4 py-2 bg-gray-300 rounded-md">Next</a>
      <?php endif; ?>
    </div>
  </main>
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      if (window.location.hash === "#product-list") {
        document.getElementById("product-list").scrollIntoView({ behavior: "smooth" });
      }
    });
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\Backend\java-juice\resources\views/front/products.blade.php ENDPATH**/ ?>