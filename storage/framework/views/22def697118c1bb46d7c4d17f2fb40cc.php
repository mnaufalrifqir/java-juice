
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
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <?php if($transaction->payment_status == 'Pending'): ?>
                    <i class="fas fa-exclamation-circle text-red-500 text-4xl"></i>
                    <h1 class="text-2xl font-semibold mt-2 text-red-500">Pembayaran Tertunda</h1>
                    <p class="text-gray-600 mt-2">Silakan selesaikan pembayaran Anda untuk memproses pesanan Anda.</p>
                <?php else: ?>
                    <i class="fas fa-check-circle text-green-500 text-4xl"></i>
                    <h1 class="text-2xl font-semibold mt-2">Terima kasih atas pesanan Anda!</h1>
                    <p class="text-gray-600 mt-2">Terima kasih telah berbelanja dengan kami. Pesanan Anda sedang diproses. Harap tunggu sampai pesanan Anda tiba, dan jangan lupa beri kami penilaian!</p>
                <?php endif; ?>
            </div>
            
            <div class="space-y-6">
                <!-- Tanggal Transaksi -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Tanggal Transaksi</h2>
                    <p class="text-gray-600"><?php echo e($transaction->created_at->format('l, d F Y (T)')); ?></p>
                </div>

                <!-- Metode Pengiriman -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Metode Pengiriman</h2>
                    <p class="text-gray-600"><?php echo e($transaction->courier); ?></p>
                    <?php if($transaction->tracking_number): ?>
                        <p class="text-gray-600">Nomor Resi: <?php echo e($transaction->tracking_number); ?></p>
                    <?php else: ?>
                        <p class="text-gray-600">Nomor Resi: Belum Tersedia</p>
                    <?php endif; ?>
                    <?php if($transaction->tracking_number && str_contains($transaction->courier, 'jne')): ?>
                        <div class="flex items-center space-x-1">
                            <p class="text-gray-600">Lacak Resi: </p>
                            <a href="https://jne.co.id/tracking-package" target="_blank" class="text-blue-500 hover:underline">Klik Disini</a>
                        </div>
                    <?php elseif($transaction->tracking_number && str_contains($transaction->courier, 'tiki')): ?>
                        <div class="flex items-center space-x-1">
                            <p class="text-gray-600">Lacak Resi: </p>
                            <a href="https://tiki.id/id/track" target="_blank" class="text-blue-500 hover:underline">Klik Disini</a>
                        </div>
                    <?php elseif($transaction->tracking_number && str_contains($transaction->courier, 'pos')): ?>
                        <div class="flex items-center space-x-1">
                            <p class="text-gray-600">Lacak Resi: </p>
                            <a href="https://www.posindonesia.co.id/id/tracking" target="_blank" class="text-blue-500 hover:underline">Klik Disini</a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Barang Pesanan -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700 mb-2">Pesanan Anda</h2>
                    <?php $__currentLoopData = $transaction->detailsTransaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center space-x-4 justify-between">
                            <div class="flex space-x-4">
                                <img src="<?php echo e(Storage::url($item->product->image)); ?>" alt="<?php echo e($item->product->name); ?>" class="w-16 h-16 rounded" />
                                <p class="text-gray-700"><?php echo e($item->product->name); ?></p>
                                <p class="text-gray-600">x<?php echo e($item->quantity); ?></p>
                            </div>
                            <p class="ml-auto text-gray-700 font-bold">Rp. <?php echo e(number_format($item->total_price, 2)); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Rangkuman Pesanan -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex justify-between text-gray-700">
                        <span>Subtotal</span>
                        <span>Rp. <?php echo e(number_format($transaction->subtotal, 2)); ?></span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Biaya Pengiriman</span>
                        <span>Rp. <?php echo e(number_format($transaction->shipping_cost, 2)); ?></span>
                    </div>
                    <div class="flex justify-between text-gray-700 font-semibold text-lg mt-4">
                        <span>Total Keseluruhan</span>
                        <span>Rp. <?php echo e(number_format($transaction->total, 2)); ?></span>
                    </div>
                </div>

                <div class="flex justify-center space-x-4 mt-6">
                <?php if($transaction->review_status == 0): ?>
                    <?php if($transaction->payment_status == 'Pending' && $transaction->shipping_status == 'Pending'): ?>
                        <a href="<?php echo e($transaction->payment_url); ?>" class="bg-blue-500 text-white py-3 px-6 rounded-md">Bayar Sekarang!</a>
                    <?php elseif($transaction->payment_status == 'Success' && $transaction->shipping_status == 'Shipped'): ?>
                        <form action="<?php echo e(route('front.orders.delivered', $transaction->id)); ?>" method="POST" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="bg-green-500 text-white py-3 px-6 rounded-md">Pesanan Diterima</button>
                        </form>
                    <?php elseif($transaction->payment_status == 'Success' && $transaction->shipping_status == 'Delivered'): ?>
                        <a href="<?php echo e(route('front.review.create', ['transaction_id' => $transaction->id])); ?>" class="bg-[#f8a401] text-white py-3 px-6 rounded-md">Beri Penilaian</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('front.orders.index')); ?>" class="bg-blue-500 text-white py-3 px-6 rounded-md">Kembali</a>
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?php echo e(route('front.review.show', ['transaction_id' => $transaction->id])); ?>" class="bg-blue-500 text-white py-3 px-6 rounded-md">Lihat Penilaian</a>
                <?php endif; ?>
                    <a href="<?php echo e(route('front.product')); ?>" class="bg-black text-white py-3 px-6 rounded-md">Lanjutkan Belanja</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
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
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo e(env('MIDTRANS_CLIENT_KEY')); ?>"></script>
    <script src="<?php echo e(asset('js/payment.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/orders/show.blade.php ENDPATH**/ ?>