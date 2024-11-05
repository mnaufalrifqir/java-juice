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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
            <?php echo e(__('Category Details')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg flex border">
                <div class="w-full">
                    <h3 class="text-lg font-semibold"><?php echo e($category->name); ?></h3>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full mr-2">
                    Edit Category
                </a>
                <form action="<?php echo e(route('admin.categories.destroy', $category->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="font-bold py-2 px-4 bg-red-500 text-white rounded-full">
                        Delete Category
                    </button>
                </form>
            </div>

            <div class="flex justify-end mt-6">
                <a href="<?php echo e(route('admin.categories.index')); ?>" class="font-bold py-2 px-4 bg-[#FAF3EA] text-gray-800 rounded-full">
                    Back to Categories
                </a>
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
<?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/admin/categories/show.blade.php ENDPATH**/ ?>