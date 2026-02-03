<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Kelola Transaksi')); ?>

            </h2>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php if(session('success')): ?>
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg text-sm">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            
            <div class="bg-white shadow rounded-lg overflow-hidden">
                
                <table class="min-w-full bg-white hidden sm:table text-sm">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Pelanggan</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Total</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Status Pembayaran</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Status Pengiriman</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Status Ulasan</th>
                            <th class="py-2 px-4 border-b text-center font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="py-2 px-4 border-b text-center"><?php echo e($transaction->id); ?></td>
                                <td class="py-2 px-4 border-b text-center"><?php echo e($transaction->first_name); ?> <?php echo e($transaction->last_name); ?></td>
                                <td class="py-2 px-4 border-b text-center">Rp <?php echo e(number_format($transaction->total, 0, ',', '.')); ?></td>
                                <td class="py-2 px-4 border-b text-center">
                                    <span class="<?php echo e($transaction->payment_status === 'Success' ? 'text-green-500' : 'text-red-500'); ?>">
                                        <?php echo e(ucfirst($transaction->payment_status)); ?>

                                    </span>
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    <span class="<?php echo e($transaction->shipping_status === 'Received' ? 'text-green-500' : 'text-yellow-500'); ?>">
                                        <?php echo e(ucfirst($transaction->shipping_status)); ?>

                                    </span>
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    <?php if($transaction->review_status): ?>
                                        <span class="text-green-500">Sudah Diulas</span>
                                    <?php else: ?>
                                        <span class="text-red-500">Belum Diulas</span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-2 px-4 border-b text-center">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="<?php echo e(route('admin.transactions.edit', $transaction->id)); ?>" title="Edit">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                        <form action="<?php echo e(route('admin.transactions.destroy', $transaction->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" title="Hapus" class="focus:outline-none">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="7" class="py-3 text-center bg-red-500 text-white">Tidak ada transaksi ditemukan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

                
                <div class="sm:hidden">
                    <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="bg-white shadow p-4">
                            <div class="mb-1 text-sm text-gray-600 font-semibold">ID: <?php echo e($transaction->id); ?></div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Pelanggan:</span> <?php echo e($transaction->first_name); ?> <?php echo e($transaction->last_name); ?></div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Total:</span> Rp <?php echo e(number_format($transaction->total, 0, ',', '.')); ?></div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Status Pembayaran:</span>
                                <span class="<?php echo e($transaction->payment_status === 'Success' ? 'text-green-500' : 'text-red-500'); ?>">
                                    <?php echo e(ucfirst($transaction->payment_status)); ?>

                                </span>
                            </div>
                            <div class="mb-1"><span class="font-semibold text-gray-700">Status Pengiriman:</span>
                                <span class="<?php echo e($transaction->shipping_status === 'Received' ? 'text-green-500' : 'text-yellow-500'); ?>">
                                    <?php echo e(ucfirst($transaction->shipping_status)); ?>

                                </span>
                            </div>
                            <div class="mb-3"><span class="font-semibold text-gray-700">Status Ulasan:</span>
                                <?php if($transaction->review_status): ?>
                                    <span class="text-green-500">Sudah Diulas</span>
                                <?php else: ?>
                                    <span class="text-red-500">Belum Diulas</span>
                                <?php endif; ?>
                            </div>
                            <div class="flex justify-end items-center space-x-4 text-gray-600">
                                <a href="<?php echo e(route('admin.transactions.edit', $transaction->id)); ?>" title="Edit" class="hover:text-blue-600">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <form action="<?php echo e(route('admin.transactions.destroy', $transaction->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" title="Hapus" class="hover:text-red-600 focus:outline-none">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="bg-red-500 text-white text-center py-3 rounded-lg">
                            Tidak ada transaksi ditemukan
                        </div>
                    <?php endif; ?>
                </div>

                
                <div class="bg-gray-50 px-4 py-2 flex flex-col sm:flex-row justify-between items-center gap-2 sm:gap-0">
                    <div>
                        <?php if(!$transactions->onFirstPage()): ?>
                            <a href="<?php echo e($transactions->previousPageUrl()); ?>" class="text-gray-500 hover:underline">Sebelumnya</a>
                        <?php endif; ?>
                    </div>

                    <span class="text-gray-500 text-center">
                        Menampilkan <?php echo e($transactions->firstItem()); ?> - <?php echo e($transactions->lastItem()); ?> dari <?php echo e($transactions->total()); ?>

                    </span>

                    <div>
                        <?php if($transactions->hasMorePages()): ?>
                            <a href="<?php echo e($transactions->nextPageUrl()); ?>" class="text-gray-500 hover:underline">Selanjutnya</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /home/java5379/public_html/test.javajuice.id/resources/views/admin/transactions/index.blade.php ENDPATH**/ ?>