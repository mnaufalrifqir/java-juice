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
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Kelola Gambar Banner')); ?>

            </h2>
            <a href="<?php echo e(route('admin.hero_sections.create')); ?>" class="font-bold py-2 px-4 sm:px-6 bg-white text-gray-800 border rounded-full text-sm sm:text-base">
            + Tambah Baru
            </a>
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
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white text-sm">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="py-2 px-4 border-b text-center font-semibold text-gray-600 whitespace-nowrap">ID</th>
                                <th class="py-2 px-4 border-b text-center font-semibold text-gray-600 whitespace-nowrap">Gambar</th>
                                <th class="py-2 px-4 border-b text-center font-semibold text-gray-600 whitespace-nowrap">Apakah Utama?</th>
                                <th class="py-2 px-4 border-b text-center font-semibold text-gray-600 whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $hero_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="py-2 px-4 border-b text-center"><?php echo e($hero->id); ?></td>
                                    <td class="py-2 px-4 border-b text-center">
                                        <img src="<?php echo e(Storage::url($hero->image)); ?>" alt="Hero Image" class="w-16 h-16 rounded-lg mx-auto">
                                    </td>
                                    <td class="py-2 px-4 border-b text-center">
                                        <?php if($hero->isPrimary): ?>
                                            <span class="text-green-500 font-semibold">Ya</span>
                                        <?php else: ?>
                                            <span class="text-gray-500">Tidak</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="py-2 px-4 border-b text-center">
                                        <div class="flex justify-center items-center space-x-2">
                                            <form action="<?php echo e(route('admin.hero_sections.destroy', $hero->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" title="Hapus" class="focus:outline-none text-red-500">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>

                                            <?php if(!$hero->isPrimary): ?>
                                            <form action="<?php echo e(route('admin.hero_sections.setPrimary', $hero->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <button type="submit" title="Setel Sebagai Utama" class="focus:outline-none text-yellow-500">
                                                    <i class="fa-regular fa-star"></i>
                                                </button>
                                            </form>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="py-3 text-center bg-red-500 text-white">
                                        Tidak ada gambar banner yang ditemukan
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="bg-gray-50 px-4 py-3 flex flex-col sm:flex-row justify-between items-center text-sm gap-2">
                    <?php if($hero_sections->onFirstPage()): ?>
                        <span></span>
                    <?php else: ?>
                        <a href="<?php echo e($hero_sections->previousPageUrl()); ?>" class="text-gray-500 hover:underline">Sebelumnya</a>
                    <?php endif; ?>

                    <span class="text-gray-500 text-center">
                        Menampilkan <?php echo e($hero_sections->firstItem()); ?> - <?php echo e($hero_sections->lastItem()); ?> dari <?php echo e($hero_sections->total()); ?>

                    </span>

                    <?php if($hero_sections->hasMorePages()): ?>
                        <a href="<?php echo e($hero_sections->nextPageUrl()); ?>" class="text-gray-500 hover:underline">Selanjutnya</a>
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
<?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/admin/hero_sections/index.blade.php ENDPATH**/ ?>