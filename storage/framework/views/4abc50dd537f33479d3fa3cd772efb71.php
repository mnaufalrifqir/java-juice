
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
    <main class="bg-gray-50 py-10 min-h-screen">
        <div class="container mx-auto px-4 py-8">
            <?php if(session('success')): ?>
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                <?php echo e(session('success')); ?>

            </div>
            <?php elseif(session('error')): ?>
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>
            <div class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Kartu untuk Item Keranjang -->
                <div class="flex-1 bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white">
                                <thead>
                                    <tr>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Produk</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Harga</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Kuantitas</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Jumlah</th>
                                        <th class="py-2 px-4 bg-gray-100 text-left text-sm font-medium text-gray-600">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="py-4 px-4 flex items-center">
                                        <img
                                        alt="<?php echo e($item->product->name); ?>"
                                        src="<?php echo e(Storage::url($item->product->image)); ?>"
                                        class="h-12 w-12 rounded-md"
                                        height="50"
                                        width="50"
                                        />
                                        <span class="ml-4 text-gray-700"><?php echo e($item->product->name); ?></span>
                                    </td>
                                    <td class="py-4 px-4 text-gray-700">Rp. <?php echo e(number_format($item->product->current_price, 2)); ?></td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center">
                                            <form action="<?php echo e(route('cart.updateQuantity', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" name="quantity" value="<?php echo e($item->quantity - 1); ?>" class="text-gray-700 border border-gray-300 px-3 py-1" <?php echo e($item->quantity <= 1 ? 'disabled' : ''); ?>>-</button>
                                            </form>
                                            <input type="text" name="quantity" value="<?php echo e($item->quantity); ?>" class="w-12 text-center border-t border-b border-gray-300" readonly />
                                            <form action="<?php echo e(route('cart.updateQuantity', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" name="quantity" value="<?php echo e($item->quantity + 1); ?>" class="text-gray-700 border border-gray-300 px-3 py-1">+</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-gray-700">Rp. <?php echo e(number_format($item->product->current_price * $item->quantity, 2)); ?></td>
                                    <td class="py-4 px-4">
                                        <form action="<?php echo e(route('cart.removeFromCart', $item->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="cursor-pointer">
                                                <i class="fa-regular fa-trash-can" style="color: #f8a401;"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="py-4 px-4 text-center" colspan="5">Tidak ada item di keranjang</td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-4 text-center" colspan="5">
                                        <a href="<?php echo e(route('front.product')); ?>" class="bg-yellow-500 text-white px-6 py-2 rounded">Belanja Sekarang</a>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div>
                <!-- Kartu untuk Total Keranjang -->
                <div class="w-[300px] bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-bold text-gray-700 mb-4">Total Keranjang</h2>
                    <div class="flex justify-between mb-4">
                        <span class="text-gray-700">Total</span>
                        <span class="text-orange-500 font-bold">Rp. <?php echo e(number_format($total, 2)); ?></span>
                    </div>
                    <a href="<?php echo e(route('transactions.checkout')); ?>" class="block bg-orange-500 text-white text-center py-2 rounded-md hover:bg-orange-600">Lanjut ke Pembayaran</a>
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

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/cart.blade.php ENDPATH**/ ?>