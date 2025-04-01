
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
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <i class="fas fa-star text-[#ff9c1a] text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Detail Ulasan Anda</h1>
                <p class="text-gray-600 mt-2">Terima kasih telah memberikan ulasan! Berikut adalah detail umpan balik Anda.</p>
            </div>

            <div class="space-y-6">
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Ulasan Transaksi</h2>
                    <div class="rating-box">
                        <label class="text-gray-700">Rating</label>
                        <div class="stars">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <i class="fa-solid fa-star <?php echo e($testimonial->rating >= $i ? 'text-[#ff9c1a]' : 'text-gray-400'); ?>"></i>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-700">Komentar</label>
                        <p class="w-full p-2 border border-gray-300 rounded-lg"><?php echo e($testimonial->comment); ?></p>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Ulasan Produk</h2>
                    <?php $__currentLoopData = $testimonial->testimonialDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border-b border-gray-200 py-4">
                            <div class="flex items-center space-x-4">
                                <img src="<?php echo e(Storage::url($item->product->image)); ?>" alt="<?php echo e($item->product->name); ?>" class="w-16 h-16 rounded">
                                <p class="font-semibold text-gray-700"><?php echo e($item->product->name); ?></p>
                            </div>
                            <div class="mt-4">
                                <label class="text-gray-700">Rating</label>
                                <div class="stars">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                        <i class="fa-solid fa-star <?php echo e($item->rating >= $i ? 'text-[#ff9c1a]' : 'text-gray-400'); ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="text-gray-700">Komentar</label>
                                <p class="w-full p-2 border border-gray-300 rounded-lg"><?php echo e($item->comment); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
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

<?php $__env->startPush('after-scripts'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/review/show.blade.php ENDPATH**/ ?>