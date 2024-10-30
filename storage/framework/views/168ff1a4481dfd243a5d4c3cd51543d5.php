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
        <h2 class="text-4xl font-bold mb-4">Our Story</h2>
        <h3 class="text-2xl font-bold mb-4">Who we are</h3>
        <p class="text-gray-600 mb-4">
          Established in 1992, PT. Wahana Cipta operates as a General Contracting company with a footprint that we have planted throughout Indonesia. Initially, we focused on construction in the field of residential housing development in Jakarta. As the company grows, now we are present as a reliable...
        </p>
      </div>
      <div class="md:w-1/2 mt-8 md:mt-0">
        <img alt="Team working together" class="rounded-lg shadow-md" height="400" src="https://storage.googleapis.com/a1aa/image/16LEtO6trnYGGVShVoPKL2CiWpFKXsgye81HFe0VJ1sW2soTA.jpg" width="500"/>
      </div>
    </div>
  </section>

  <!-- What Make Us Different Section -->
  <section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold mb-4">What Make Us Different?</h2>
        <p class="text-gray-600">
          Check out our best service you can possibly orders in building your company and don't forget to ask via our email or our customer service if you are interested in using our services
        </p>
      </div>
      <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-briefcase text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Experienced</h3>
            <p class="text-gray-600">Our experience of 25 years of building and making achievements in the world of development</p>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-tags text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Competitive Price</h3>
            <p class="text-gray-600">The prices we offer you are very competitive without reducing the quality of the company's work in the slightest</p>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-clock text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">On Time</h3>
            <p class="text-gray-600">We prioritize the quality of our work and finish it on time</p>
          </div>
        </div>
        <div class="w-full md:w-1/4 p-4 text-center">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <i class="fas fa-shield-alt text-yellow-500 text-4xl mb-4"></i>
            <h3 class="text-xl font-bold mb-2">Best Materials</h3>
            <p class="text-gray-600">The material determines the building itself so we recommend that you use the best &amp; quality materials in its class</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="container mx-auto py-16 px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold mb-4">Our team member is ready to help our clients!</h2>
      <p class="text-gray-600 mb-4">
        We love what we do and we do it with passion. We value the experimentation of the message and smart incentives.
      </p>
      <a class="bg-yellow-500 text-white py-2 px-4 rounded-lg" href="#">View All Team</a>
    </div>
    <div class="flex flex-wrap justify-center">
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Team member 1" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/lKKJsMNRKeQCV6khVr0sP3HoeBBxCMflfGxuPzbUB5miZziOB.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Team member 2" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/pMjfDPheXEqZ4UGb66wV56GPCFbUmOfWtbsoE2xRDLG1sZRnA.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Team member 3" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/t4oPQay72NIuEpO8bPcDjLomVHpzUefubC8YWEEUtJHP2soTA.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Team member 4" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/tYncfiKIkETfEUeyb6SYZ56afYyQdsMkXhK4ReRp61gnzmFdC.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Team member 5" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/Cpr5htSryb4DDV1fMNPWjQt8eUf2RSoW1s6wO432W6yjsZRnA.jpg" width="200"/>
      </div>
      <div class="w-full md:w-1/3 lg:w-1/6 p-4">
        <img alt="Team member 6" class="rounded-lg shadow-md" height="200" src="https://storage.googleapis.com/a1aa/image/ISyOKXAuB6ITGBYT0wJTCA2wm9aelr4P6PH6g0nYl8fS2soTA.jpg" width="200"/>
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

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/about.blade.php ENDPATH**/ ?>