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
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row lg:space-x-8">
            <!-- Kartu Detail Tagihan -->
            <div class="w-full lg:w-2/3 bg-white p-8 shadow rounded-lg">
                <h2 class="text-2xl font-bold mb-6">Detail Tagihan</h2>
                <!-- Formulir detail tagihan -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="first_name">Nama Depan</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="first_name" type="text" value="first"/>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="last_name">Nama Belakang</label>
                        <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="last_name" type="text" value="last"/>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="street_address">Alamat Jalan</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="street_address" type="text" value="address"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="province">Provinsi</label>
                    <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="province">
                        <option value="">Pilih Provinsi</option>
                        <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($province['province_id']); ?>:<?php echo e($province['province']); ?>"><?php echo e($province['province']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="city">Kota / Kabupaten</label>
                    <select id="city" name="city" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" disabled>
                        <option value="">Pilih Kota</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="postal_code">Kode Pos</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="postal_code" type="text" value="1"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="phone_number">Nomor Telepon</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="phone_number" type="text" value="1"/>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700" for="email">Alamat Email</label>
                    <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="email" type="email" value="blbla@gmail.com"/>
                </div>
            </div>

            <div>
                <!-- Kartu Metode Pengiriman -->
                <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 mb-8 lg:mt-0">
                    <h2 class="text-2xl font-bold mb-6">Pilih Metode Pengiriman</h2>
                    <input type="hidden" name="weight" id="weight" value="<?php echo e($totalWeight); ?>">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="courier">Kurir</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="courier" name="courier" required disabled>
                            <option value="">Pilih Kurir</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700" for="shipping_option">Pilihan Pengiriman</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="shipping_option" name="shipping_option" required disabled>
                            <option value="">Pilih Pilihan Pengiriman</option>
                        </select>
                    </div>
                </div>
                <!-- Kartu Detail Produk -->
                <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 lg:mt-0">
                    <h2 class="text-2xl font-bold mb-6">Detail Produk</h2>
                    <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mb-4">
                            <div class="flex justify-between">
                                <span><?php echo e($item->product->name); ?> <span class="text-gray-500">x <?php echo e($item->quantity); ?> pcs</span></span>
                                <span>Rp. <?php echo e(number_format($item->product->current_price * $item->quantity, 0, ',', '.')); ?></span>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="mb-4">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span id="subtotal" value="<?php echo e($totalAmount); ?>">Rp. <?php echo e(number_format($totalAmount, 0, ',', '.')); ?></span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between">
                            <span>Pengiriman (<?php echo e($totalWeight); ?> gram)</span>
                            <span id="shipping_cost">Rp. <?php echo e(number_format(0, 0, ',', '.')); ?></span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex justify-between font-bold text-lg">
                            <span>Total</span>
                            <span id="total" class="text-orange-500">Rp. <?php echo e(number_format($totalAmount, 0, ',', '.')); ?></span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">
                        Data pribadi Anda akan digunakan untuk mendukung pengalaman Anda selama di situs web ini, untuk mengelola akses ke akun Anda, dan untuk tujuan lain yang dijelaskan dalam
                        <a class="text-gray-700 font-medium" href="#">kebijakan privasi</a>.
                    </p>
                    <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Lanjutkan ke Pembayaran</button>
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

<?php $__env->startPush('before-scripts'); ?>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<?php echo e(env('MIDTRANS_CLIENT_KEY')); ?>"></script>
    <script src="<?php echo e(asset('js/payment.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/checkout.blade.php ENDPATH**/ ?>