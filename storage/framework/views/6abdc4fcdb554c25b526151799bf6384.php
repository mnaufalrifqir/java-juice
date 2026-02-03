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
      Produk
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
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <a href="<?php echo e(route('front.details', ['product' => $product->id])); ?>" class="card w-auto flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
          <img src="<?php echo e(Storage::url($product->image)); ?>" class="object-cover object-center w-full h-full" alt="thumbnail">
          <div class="p-4">
            <h2 class="font-bold lg:text-base"><?php echo e($product->name); ?></h2>
            <p class="text-gray-500 text-sm lg:text-base"><?php echo e($product->category->name); ?></p>
            <?php if($product->discount): ?>
              <p class="text-sm text-gray-400 line-through lg:text-base">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
              <p class="text-md font-bold text-gray-900 lg:text-base">Rp <?php echo e(number_format($product->current_price, 0, ',', '.')); ?></p>
            <?php else: ?>
              <p class="text-md font-bold text-gray-900 mb-5 lg:text-base">Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></p>
            <?php endif; ?>
          </div>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p>Produk tidak ditemukan.</p>
      <?php endif; ?>
    </div>
  
    <div class="flex justify-center mt-8">
      <?php if(!$products->onFirstPage()): ?>
      <a href="<?php echo e($products->previousPageUrl()); ?>#product-list" class="px-4 py-2 bg-gray-300 rounded-md">Sebelumnya</a>
      <?php endif; ?>

      <?php for($page = 1; $page <= $products->lastPage(); $page++): ?>
        <?php if($page == $products->currentPage()): ?>
          <span class="px-4 py-2 bg-yellow-500 text-white rounded-md"><?php echo e($page); ?></span>
        <?php else: ?>
          <a href="<?php echo e($products->url($page)); ?>#product-list" class="px-4 py-2 mx-2 bg-gray-300 rounded-md"><?php echo e($page); ?></a>
        <?php endif; ?>
      <?php endfor; ?>

      <?php if($products->hasMorePages()): ?>
      <a href="<?php echo e($products->nextPageUrl()); ?>#product-list" class="px-4 py-2 bg-gray-300 rounded-md">Selanjutnya</a>
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

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/java5379/public_html/test.javajuice.id/resources/views/front/products.blade.php ENDPATH**/ ?>