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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Pelanggan</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Total</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Status Pembayaran</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Status Pengiriman</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Status Ulasan</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="py-2 px-4 border-b text-center"><?php echo e($transaction->id); ?></td>
                                <td class="py-2 px-4 border-b text-center">
                                    <?php echo e($transaction->first_name); ?> <?php echo e($transaction->last_name); ?>

                                </td>
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
                                    <?php if($transaction->review_status === true): ?>
                                        <span class="text-green-500">
                                            Sudah Diulas
                                        </span>
                                    <?php else: ?>
                                        <span class="text-red-500">
                                            Belum Diulas
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Edit">
                                            <a href="<?php echo e(route('admin.transactions.edit', $transaction->id)); ?>">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </a>
                                        </span>
                                        <span title="Hapus">
                                            <form action="<?php echo e(route('admin.transactions.destroy', $transaction->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" title="Hapus" class="focus:outline-none">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="py-3 text-center bg-red-500 text-white">
                                    Tidak ada transaksi ditemukan
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    <?php if($transactions->onFirstPage()): ?>
                        <span></span>
                    <?php else: ?>
                        <a href="<?php echo e($transactions->previousPageUrl()); ?>" class="text-gray-500 hover:underline">Sebelumnya</a>
                    <?php endif; ?>

                    <span class="text-gray-500">
                        Menampilkan <?php echo e($transactions->firstItem()); ?> - <?php echo e($transactions->lastItem()); ?> dari <?php echo e($transactions->total()); ?>

                    </span>

                    <?php if($transactions->hasMorePages()): ?>
                        <a href="<?php echo e($transactions->nextPageUrl()); ?>" class="text-gray-500 hover:underline">Selanjutnya</a>
                    <?php else: ?>
                        <span></span>
                    <?php endif; ?>
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
<?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/admin/transactions/index.blade.php ENDPATH**/ ?>