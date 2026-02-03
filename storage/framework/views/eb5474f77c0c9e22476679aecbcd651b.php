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
    <!-- Konten Utama -->
    <div class="container mx-auto px-4 py-8">
        <!-- <div class="flex items-center mb-6">
            <button class="border border-red-600 text-red-600 rounded-full px-4 py-2 mr-2">Semua</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Pembayaran Tertunda</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Sedang Diproses</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Sedang Dikirim</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2 mr-2">Pesanan Selesai</button>
            <button class="border border-gray-300 text-gray-600 rounded-full px-4 py-2">Dibatalkan</button>
        </div> -->

        <!-- Kartu Pesanan -->
        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('front.orders.show', $transaction->id)); ?>" class="block bg-white p-6 rounded-lg shadow mb-6 hover:bg-gray-100 transition">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center">
                        <?php
                            $bgColor = match($transaction->shipping_status) {
                                'Pending' => 'bg-gray-200 text-gray-600',
                                'In Progress' => 'bg-orange-200 text-orange-600',
                                'Shipped' => 'bg-blue-200 text-blue-600',
                                'Delivered' => 'bg-green-200 text-green-600',
                                'Cancelled' => 'bg-red-200 text-red-600',
                                default => 'bg-gray-200 text-gray-600',
                            };
                            $valueShipping = match($transaction->shipping_status) {
                                'Pending' => 'Menunggu Pembayaran',
                                'In Progress' => 'Sedang Diproses',
                                'Shipped' => 'Pesanan Dikirim',
                                'Delivered' => 'Pesanan Diterima',
                                'Cancelled' => 'Dibatalkan',
                            };
                        ?>
                        <span class="rounded-full px-3 py-1 text-sm <?php echo e($bgColor); ?>">
                            <?php echo e($valueShipping); ?>

                        </span>
                        <span class="text-gray-600 ml-4"><?php echo e($transaction->created_at->format('l, d F Y (T)')); ?></span>
                    </div>
                    <i class="fas fa-chevron-right text-gray-600"></i>
                </div>
                <div class="flex">
                    <?php if($transaction->detailsTransaction->isNotEmpty()): ?>
                        <img src="<?php echo e(Storage::url($transaction->detailsTransaction[0]->product->image)); ?>" alt="<?php echo e($transaction->detailsTransaction[0]->product->description); ?>" class="w-16 h-16 rounded mr-4"/>
                        <div>
                            <div class="text-red-600 font-bold mb-2">ID Pesanan: <?php echo e($transaction->order_id); ?></div>
                            
                            <div class="text-gray-600 mb-2">
                                <?php echo e($transaction->detailsTransaction[0]->product->name); ?>

                                <?php if($transaction->detailsTransaction->count() > 1): ?>
                                    & <?php echo e($transaction->detailsTransaction->count() - 1); ?> item lainnya
                                <?php endif; ?>
                            </div>
                            
                            <div class="text-gray-600 font-bold">Rp. <?php echo e(number_format($transaction->total, 2)); ?></div>
                        </div>
                    <?php endif; ?>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/java5379/public_html/test.javajuice.id/resources/views/front/orders/index.blade.php ENDPATH**/ ?>