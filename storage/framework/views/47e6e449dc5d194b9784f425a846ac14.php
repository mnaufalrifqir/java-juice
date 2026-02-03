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
  <section class="container mx-auto py-16 px-6">
    <div class="flex flex-col md:flex-row items-center">
      <div class="md:w-1/2">
        <h2 class="text-4xl font-bold mb-4">Cerita Kami</h2>
        <h3 class="text-2xl font-bold mb-4">Siapa Kami</h3>
        <p class="text-gray-600 mb-4">
          Didirikan pada tahun 1992, PT. Wahana Cipta beroperasi sebagai perusahaan Kontraktor Umum dengan jejak yang telah kami tanamkan di seluruh Indonesia. Awalnya, kami fokus pada pembangunan perumahan di Jakarta. Seiring dengan berkembangnya perusahaan, kini kami hadir sebagai mitra yang terpercaya...
        </p>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0">
        <img alt="Tim bekerja bersama" class="rounded-lg shadow-md" height="400" src="https://storage.googleapis.com/a1aa/image/16LEtO6trnYGGVShVoPKL2CiWpFKXsgye81HFe0VJ1sW2soTA.jpg" width="500"/>
      </div>
    </div>
  </section>

  <!-- Bagian Apa yang Membuat Kami Berbeda -->
  <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">Apa yang Membuat Kami Berbeda?</h2>
        <p class="text-gray-600">
          Lihatlah layanan terbaik yang dapat Anda pesan dalam membangun perusahaan Anda dan jangan lupa untuk menghubungi kami melalui email atau customer service kami jika Anda tertarik menggunakan layanan kami.
        </p>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-briefcase text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Berpengalaman</h3>
            <p class="text-gray-600">Pengalaman kami selama 25 tahun dalam membangun dan meraih prestasi di dunia pembangunan</p>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-tags text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Harga Bersaing</h3>
            <p class="text-gray-600">Harga yang kami tawarkan sangat bersaing tanpa mengurangi kualitas pekerjaan perusahaan sedikit pun</p>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-clock text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Tepat Waktu</h3>
            <p class="text-gray-600">Kami mengutamakan kualitas pekerjaan kami dan menyelesaikannya tepat waktu</p>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-shield-alt text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Bahan Terbaik</h3>
            <p class="text-gray-600">Bahan menentukan kualitas bangunan itu sendiri, jadi kami menyarankan Anda untuk menggunakan bahan terbaik dan berkualitas di kelasnya</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bagian Tim -->
  <section class="container mx-auto py-16 px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold mb-4">Anggota tim kami siap membantu klien kami!</h2>
      <p class="text-gray-600 mb-4">
        Kami menyukai apa yang kami lakukan dan kami melakukannya dengan penuh semangat. Kami menghargai eksperimen pesan dan insentif cerdas.
      </p>
      <a class="bg-yellow-500 text-white py-2 px-4 rounded-lg" href="<?php echo e(Route('front.team')); ?>">Lihat Semua Tim</a>
    </div>
    <div class="flex flex-wrap justify-center">
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Anggota tim 1" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/lKKJsMNRKeQCV6khVr0sP3HoeBBxCMflfGxuPzbUB5miZziOB.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Anggota tim 2" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/pMjfDPheXEqZ4UGb66wV56GPCFbUmOfWtbsoE2xRDLG1sZRnA.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Anggota tim 3" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/t4oPQay72NIuEpO8bPcDjLomVHpzUefubC8YWEEUtJHP2soTA.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Anggota tim 4" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/tYncfiKIkETfEUeyb6SYZ56afYyQdsMkXhK4ReRp61gnzmFdC.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Anggota tim 5" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/Cpr5htSryb4DDV1fMNPWjQt8eUf2RSoW1s6wO432W6yjsZRnA.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Anggota tim 6" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/ISyOKXAuB6ITGBYT0wJTCA2wm9aelr4P6PH6g0nYl8fS2soTA.jpg" width="200"/>
      </div>
    </div>
  </section>

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

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/java5379/public_html/test.javajuice.id/resources/views/front/about.blade.php ENDPATH**/ ?>