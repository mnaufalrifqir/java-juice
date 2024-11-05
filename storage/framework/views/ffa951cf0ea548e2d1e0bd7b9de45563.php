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
    <?php endif; ?>
    <div class="flex flex-col lg:flex-row">
      <div class="lg:w-1/2">
        <img 
          src="<?php echo e(Storage::url($product->image)); ?>" alt="<?php echo e($product->name); ?>"
          class="rounded-lg shadow-lg object-cover w-full h-auto"
          width="600"
          height="600"
        />
      </div>
      <div class="lg:w-1/2 lg:pl-10 mt-6 lg:mt-0">
        <h2 class="text-3xl font-bold"><?php echo e($product->name); ?></h2>
        <p class="text-gray-600 mt-2 text-xl"><?php echo e($product->category->name); ?></p>
        <p class="text-gray-600 mt-2 text-2xl">Rp. <?php echo e(number_format($product->price, 2)); ?></p>
        <div class="flex items-center mt-4">
          <div class="flex items-center text-yellow-500">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <span class="ml-2 text-gray-600">5 Customer Review</span>
        </div>
        <p class="text-gray-600 mt-4"><?php echo e($product->description); ?></p>
        <div class="flex items-center mt-6">
          <!-- Button Minus -->
          <button onclick="decreaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">-</button>
          
          <!-- Quantity Input -->
          <input id="product-quantity" type="text" name="quantity" value="1" class="w-12 text-center border-t border-b border-gray-300 mx-2" />
          
          <!-- Button Plus -->
          <button onclick="increaseQuantity()" class="text-gray-700 border border-gray-300 px-3 py-1">+</button>
          
          <?php if(auth()->guard()->check()): ?>
            <!-- Add to Cart Form -->
            <form id="add-to-cart-form" action="<?php echo e(route('cart.addToCart')); ?>" method="POST" class="inline-block ml-4">
              <?php echo csrf_field(); ?>
              <!-- Hidden Field for Product ID -->
              <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
              <!-- Hidden Field for Quantity -->
              <input type="hidden" name="quantity" id="form-quantity" value="1">
              <button type="submit" onclick="updateFormQuantity()" class="bg-yellow-500 text-white px-6 py-2 rounded">
                Add To Cart
              </button>
            </form>
          <?php else: ?>
            <!-- Redirect to Login if not Authenticated -->
            <a href="<?php echo e(route('login')); ?>" class="ml-4 bg-yellow-500 text-white px-6 py-2 rounded">
              Add To Cart
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    
    <!-- You may also like -->
    <section class="mt-12">
      <h2 class="text-2xl font-bold mb-6">You may also like</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow-lg rounded-lg p-4 hover:transform transition-transform duration-200">
          <img 
            src="<?php echo e(asset('assets/best-products/product-1.jpg')); ?>" 
            alt="Ceylon Ginger Cinnamon chai tea - Best Seller Product" 
            class="rounded-lg object-cover" 
            width="300" 
            height="300" 
          />
          <h3 class="mt-4 text-lg font-bold">Ceylon Ginger Cinnamon chai tea</h3>
          <p class="text-gray-600">Rp. 250,000.00</p>
        </div>
        
        <div class="bg-white shadow-lg rounded-lg p-4 hover:transform transition-transform duration-200">
          <img 
            src="<?php echo e(asset('assets/best-products/product-2.jpg')); ?>" 
            alt="Ceylon Ginger Cinnamon chai tea - Best Seller Product" 
            class="rounded-lg object-cover" 
            width="300" 
            height="300" 
          />
          <h3 class="mt-4 text-lg font-bold">Ceylon Ginger Cinnamon chai tea</h3>
          <p class="text-gray-600">Rp. 250,000.00</p>
        </div>
        
        <div class="bg-white shadow-lg rounded-lg p-4 hover:transform transition-transform duration-200">
          <img 
            src="<?php echo e(asset('assets/best-products/product-3.jpg')); ?>" 
            alt="Ceylon Ginger Cinnamon chai tea - Best Seller Product" 
            class="rounded-lg object-cover" 
            width="300" 
            height="300" 
          />
          <h3 class="mt-4 text-lg font-bold">Ceylon Ginger Cinnamon chai tea</h3>
          <p class="text-gray-600">Rp. 250,000.00</p>
        </div>
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