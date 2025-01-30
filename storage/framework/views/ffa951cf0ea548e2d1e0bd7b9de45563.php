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
  <main class="container mt-20 mx-auto py-8 px-6">
    <?php if(session('success')): ?>
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        <?php echo e(session('success')); ?>

    </div>
    <?php elseif(session('error')): ?>
    <div class="bg-red-500 text-white p-4 rounded mb-4">
        <?php echo e(session('error')); ?>

    </div>
    <?php endif; ?>
    <div class="flex flex-col lg:flex-row">
      <div class="lg:w-1/3">
        <img 
          src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>"
          class="rounded-lg shadow-lg object-cover w-[500px] h-auto"
        />
      </div>
      <div class="lg:w-2/3 lg:pl-10 mt-6 lg:mt-0">
        <h2 class="text-3xl font-bold"><?php echo e($product->name); ?></h2>
        <p class="text-gray-600 mt-2 text-xl"><?php echo e($product->category->name); ?></p>
        <?php if($product->discount): ?>
          <p class="text-gray-600 mt-2 text-2xl line-through">Rp. <?php echo e(number_format($product->price, 2)); ?></p>
          <p class="text-red-500 text-3xl font-bold">Rp. <?php echo e(number_format($product->current_price, 2)); ?></p>
        <?php else: ?>
          <p class="text-gray-600 mt-2 text-2xl">Rp. <?php echo e(number_format($product->current_price, 2)); ?></p>
        <?php endif; ?>
        <div class="flex items-center mt-4">
          <?php if($average_rating): ?>
            <p class="text-2xl text-gray-600"><?php echo e($average_rating); ?></p>
          <?php else: ?>
            <p class="text-2xl text-gray-600">0</p>
          <?php endif; ?>
          <i class="fas fa-star text-yellow-500 text-xl"></i>
          <span class="text-gray-600 ml-4"><?php echo e($testimonials_details->count()); ?> Ulasan Pelanggan</span>
        </div>
        <p class="text-gray-600 mt-4"><?php echo e($product->description); ?></p>
        <div class="flex items-center mt-6">
          <button onclick="decreaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">-</button>
          <input id="product-quantity" type="text" name="quantity" value="1" class="w-12 text-center border-t border-b border-gray-300 mx-2" />
          <button onclick="increaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">+</button>
          <?php if(auth()->guard()->check()): ?>
            <form id="add-to-cart-form" action="<?php echo e(route('cart.addToCart')); ?>" method="POST" class="inline-block ml-4">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
              <input type="hidden" name="quantity" id="form-quantity" value="1">
              <button type="submit" onclick="updateFormQuantity()" class="bg-yellow-500 text-white px-6 py-2 rounded">
                Tambah ke Keranjang
              </button>
            </form>
          <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="ml-4 bg-yellow-500 text-white px-6 py-2 rounded">
              Tambah ke Keranjang
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Ulasan Pelanggan -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold mb-6">Ulasan Pelanggan</h2>
      <?php if($testimonials_details->count() > 0): ?>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <?php $__currentLoopData = $testimonials_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white shadow-lg rounded-lg p-4">
              <p class="text-gray-600"><?php echo e($testimonial->comment); ?></p>
              <div class="flex items-center justify-between mt-4">
                <div class="flex items-center">
                  <div class="flex flex-col ml-4">
                    <p class="font-bold"><?php echo e($testimonial->user->name); ?></p>
                  </div>
                </div>
                <div class="flex items-center">
                  <?php for($i = 0; $i < 5; $i++): ?>
                    <?php if($i < $testimonial->rating): ?>
                      <i class="fas fa-star text-yellow-500 text-2xl"></i>
                    <?php else: ?>
                      <i class="fas fa-star text-gray-400 text-2xl"></i>
                    <?php endif; ?>
                  <?php endfor; ?>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php else: ?>
        <div class="text-center">
          <p class="text-gray-600">Belum ada ulasan</p>
        </div>
      <?php endif; ?>
    </section>
    
    <!-- Anda mungkin juga suka -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold mb-6">Anda mungkin juga suka</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('front.details', ['product' => $related_product->id])); ?>" class="bg-white shadow-lg rounded-lg p-4">
            <img src="<?php echo e(Storage::url($related_product->image)); ?>" alt="<?php echo e($related_product->name); ?>" class="w-full h-auto object-cover rounded-lg" />
            <h3 class="text-xl font-bold mt-4"><?php echo e($related_product->name); ?></h3>
            <p class="text-gray-600 mt-2"><?php echo e($related_product->category->name); ?></p>
            <?php if($related_product->discount): ?>
              <p class="text-gray-600 mt-2 text-xl line-through">Rp. <?php echo e(number_format($related_product->price, 2)); ?></p>
              <p class="text-red-500 text-xl font-bold">Rp. <?php echo e(number_format($related_product->current_price, 2)); ?></p>
            <?php else: ?>
              <p class="text-gray-600 mt-2 text-xl">Rp. <?php echo e(number_format($related_product->current_price, 2)); ?></p>
            <?php endif; ?>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>
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
  <script src="<?php echo e(asset('js/quantity.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/details.blade.php ENDPATH**/ ?>