
<?php $__env->startSection('content'); ?>
    <h2><?php echo e($userId); ?></h2>
    <br>
    <?php if($userTransactionId): ?>
        <h1><?php echo e($userTransactionId); ?></h1>
    <?php else: ?>
        <h1>No Transaction Found</h1>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/orders/failed.blade.php ENDPATH**/ ?>