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
    <h2 class="text-3xl font-bold text-center mb-4">Get In Touch With Us</h2>
    <p class="text-center text-gray-600 mb-12">For More Information About Our Product & Services. Please Feel Free To Drop Us An Email. Our Staff Always Be There To Help You Out. Do Not Hesitate!</p>
    <div class="flex flex-wrap -mx-6">
        <div class="w-full md:w-1/2 lg:w-1/3 px-6 mb-12 md:mb-0">
            <div class="flex items-start mb-6">
                <i class="fas fa-map-marker-alt text-2xl text-orange-500 mr-4"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Address</h3>
                    <p>236 5th SE Avenue, New York NY10000, United States</p>
                </div>
            </div>
            <div class="flex items-start mb-6">
                <i class="fas fa-phone-alt text-2xl text-orange-500 mr-4"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Phone</h3>
                    <p>Mobile: +(84) 546-6789</p>
                    <p>Hotline: +(84) 546-6789</p>
                </div>
            </div>
            <div class="flex items-start">
                <i class="fas fa-clock text-2xl text-orange-500 mr-4"></i>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Working Time</h3>
                    <p>Monday-Friday: 9:00 - 22:00</p>
                    <p>Saturday-Sunday: 9:00 - 21:00</p>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-2/3 px-6">
            <form>
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 mb-2">Your name</label>
                    <input type="text" id="name" class="w-full border border-gray-300 p-3 rounded" placeholder="Abc">
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 mb-2">Email address</label>
                    <input type="email" id="email" class="w-full border border-gray-300 p-3 rounded" placeholder="Abc@def.com">
                </div>
                <div class="mb-6">
                    <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                    <input type="text" id="subject" class="w-full border border-gray-300 p-3 rounded" placeholder="This is an optional">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 mb-2">Message</label>
                    <textarea id="message" class="w-full border border-gray-300 p-3 rounded" rows="4" placeholder="Hi! I'd like to ask about"></textarea>
                </div>
                <button type="submit" class="bg-orange-500 text-white py-3 px-6 rounded hover:bg-orange-600">Submit</button>
            </form>
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
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/contact.blade.php ENDPATH**/ ?>