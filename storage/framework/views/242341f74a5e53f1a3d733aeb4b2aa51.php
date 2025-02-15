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
  <div class="content">
    <div class="slider">
      <?php $__currentLoopData = $hero_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero_section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
          <img src="<?php echo e(Storage::url($hero_section->image)); ?>" alt="Banner Image" class="w-full h-auto">
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div id="BestSeller" class="content w-full flex flex-col gap-[30px] justify-center mt-10">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Produk Terlaris</h2>
        <p>Pilihan Terbaik yang Paling Dicintai oleh Pelanggan!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="center flex justify-center gap-[100px] overflow-hidden">
        <?php $__currentLoopData = $best_sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $best_seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('front.details', ['product' => $best_seller->id])); ?>" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
            <img src="<?php echo e(Storage::url($best_seller->image)); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
            <div class="p-4">
              <h2 class="text-xl font-bold"><?php echo e($best_seller->name); ?></h2>
              <p class="text-gray-500"><?php echo e($best_seller->category->name); ?></p>
              <?php if($best_seller->discount): ?>
                <p class="text-sm text-gray-400 line-through">Rp <?php echo e(number_format($best_seller->price, 0, ',', '.')); ?></p>
                <p class="text-xl font-bold text-gray-900">Rp <?php echo e(number_format($best_seller->current_price, 0, ',', '.')); ?></p>
              <?php else: ?>
                <p class="text-xl font-bold text-gray-900">Rp <?php echo e(number_format($best_seller->price, 0, ',', '.')); ?></p>
                <br>
              <?php endif; ?>
            </div>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div id="NewProducts" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Produk Terbaru</h2>
        <p>Nikmati Sensasi Rasa Baru dari Koleksi Liquid Vape Kami!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        <?php $__currentLoopData = $new_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('front.details', ['product' => $new_product->id])); ?>" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
            <img src="<?php echo e(Storage::url($new_product->image)); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
            <div class="p-4">
              <h2 class="text-xl font-bold"><?php echo e($new_product->name); ?></h2>
              <p class="text-gray-500"><?php echo e($new_product->category->name); ?></p>
              <?php if($new_product->discount): ?>
                <p class="text-sm text-gray-400 line-through">Rp <?php echo e(number_format($new_product->price, 0, ',', '.')); ?></p>
                <p class="text-xl font-bold text-gray-900">Rp <?php echo e(number_format($new_product->current_price, 0, ',', '.')); ?></p>
              <?php else: ?>
                <p class="text-xl font-bold text-gray-900">Rp <?php echo e(number_format($new_product->price, 0, ',', '.')); ?></p>
                <br>
              <?php endif; ?>
            </div>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div id="Sale" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10">
    <div class="flex items-center text-center justify-center">
      <div class="flex flex-col gap-[14px]">
        <h2 class="font-bold text-4xl leading-[45px]">Penawaran Spesial</h2>
        <p>Cita rasa premium, kini lebih terjangkau dari sebelumnya. Jangan sampai ketinggalan!</p>
      </div>
    </div>
    <div class="relative">
      <div id="slider" class="responsive flex flex-wrap items-center gap-[30px] justify-center">
        <?php $__currentLoopData = $sale_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('front.details', ['product' => $sale_product->id])); ?>" class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
            <img src="<?php echo e(Storage::url($sale_product->image)); ?>" class="object-cover object-center w-full h-full" alt="thumbnails">
            <div class="p-4">
              <h2 class="text-xl font-bold"><?php echo e($sale_product->name); ?></h2>
              <p class="text-gray-500"><?php echo e($sale_product->category->name); ?></p>
              <p class="text-sm text-gray-400 line-through">Rp <?php echo e(number_format($sale_product->price, 0, ',', '.')); ?></p>
              <p class="text-xl font-bold text-gray-900">Rp <?php echo e(number_format($sale_product->current_price, 0, ',', '.')); ?></p>
            </div>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div id="OurPartners" class="bg-[#FAF3EA] w-full mt-10">
    <div class="container max-w-[1130px] mx-auto py-10">
      <div class="flex flex-col gap-[14px] items-center text-center mb-10">
        <h2 class="font-bold text-4xl leading-[45px] text-[#3a3a3a] text-center">Mitra Kami</h2>
        <p>Bersama Mitra Terpercaya untuk Memberikan Kualitas Terbaik!</p>
      </div>
      <div class="flex flex-wrap items-center justify-between">
        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="card w-[200px] h-[100px] flex items-center justify-center p-4">
            <img src="<?php echo e(Storage::url($partner->logo)); ?>" class="object-contain w-full h-full" alt="Partner Logo">
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div id="Testimonials" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-10">
    <div class="flex justify-between">
      <div class="flex flex-col gap-[14px] items-start p-4">
        <h2 class="font-bold text-2xl leading-[45px] text-black">Ulasan Pelanggan Kami</h2>
        <p class="text-lg">Dengarkan Cerita Mereka Tentang Pengalaman Luar Biasa dengan Produk Kami!</p>
      </div>
    </div>
  </div>
  <div id="Stats" class="bg-[#FAF3EA] w-full mt-10">
    <div class="container max-w-[1130px] mx-auto py-10">
      <div class="flex flex-wrap items-center justify-between p-[10px]">
        <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statistic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="flex items-center p-4 max-w-[270px]">
            <div class="card w-[50px] flex shrink-0 overflow-hidden mr-2">
                <img src="<?php echo e(Storage::url($statistic->icon)); ?>" class="object-contain w-full h-full" alt="icon">
            </div>
            <div class="flex flex-col">
              <p class="font-extrabold text-xl leading-[30px] text-black"><?php echo e($statistic->title); ?></p>
              <p class="text-sm text-[#3a3a3a]"><?php echo e($statistic->description); ?></p>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/index.blade.php ENDPATH**/ ?>