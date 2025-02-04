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
                <?php echo e(__('Kelola Tim')); ?>

            </h2>
            <a href="<?php echo e(route('admin.teams.create')); ?>" class="font-bold py-2 px-6 bg-white text-gray-800 border rounded-full">
                Tambah Baru
            </a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php if(session('success')): ?>
                <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded-lg">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">ID</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Nama</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Gambar</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Pekerjaan</th>
                            <th class="py-2 px-4 border-b text-center text-sm font-semibold text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="py-2 px-4 border-b text-center"><?php echo e($team->id); ?></td>
                                <td class="py-2 px-4 border-b text-center"><?php echo e($team->name); ?></td>
                                <td class="py-2 px-4 border-b text-center">
                                    <img src="<?php echo e(asset('storage/' . $team->image)); ?>" alt="<?php echo e($team->name); ?>" class="h-10 mx-auto rounded-full">
                                </td>
                                <td class="py-2 px-4 border-b text-center"><?php echo e($team->occupation); ?></td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex justify-center items-center space-x-4">
                                        <span title="Edit">
                                            <a href="<?php echo e(route('admin.teams.edit', $team->id)); ?>">
                                                <ion-icon name="create-outline" class="text-2xl"></ion-icon>
                                            </a>
                                        </span>
                                        <span title="Hapus">
                                            <form action="<?php echo e(route('admin.teams.destroy', $team->id)); ?>" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota tim ini?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" title="Hapus" class="focus:outline-none">
                                                    <ion-icon name="trash-outline" class="text-2xl text-red-500"></ion-icon>
                                                </button>
                                            </form>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="py-3 text-center bg-red-500 text-white">
                                    Tidak ada anggota tim ditemukan
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                    <?php if($teams->onFirstPage()): ?>
                        <span></span>
                    <?php else: ?>
                        <a href="<?php echo e($teams->previousPageUrl()); ?>" class="text-gray-500 hover:underline">Sebelumnya</a>
                    <?php endif; ?>

                    <span class="text-gray-500">
                        Menampilkan <?php echo e($teams->firstItem()); ?> - <?php echo e($teams->lastItem()); ?> dari <?php echo e($teams->total()); ?>

                    </span>

                    <?php if($teams->hasMorePages()): ?>
                        <a href="<?php echo e($teams->nextPageUrl()); ?>" class="text-gray-500 hover:underline">Selanjutnya</a>
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
<?php /**PATH D:\Project\Backend\java-juice\resources\views/admin/teams/index.blade.php ENDPATH**/ ?>