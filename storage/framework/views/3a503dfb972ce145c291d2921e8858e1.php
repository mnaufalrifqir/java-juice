
<?php $__env->startSection('content'); ?>
<div class="bg-gray-100 min-h-screen flex items-center justify-center overflow-x-hidden">
    <div class="text-center">
        <img 
            src="https://storage.googleapis.com/a1aa/image/Tw0jqHdKHarvMVQYRf9hZxZky0WtIAol4pv3KHZyG6eUzBuTA.jpg"
            alt="Ikon Tas Belanja"
            class="mx-auto mb-6"
            width="100"
            height="100"
        />
        <h1 class="text-2xl font-semibold mb-2">Transaksi Berhasil!</h1>
        <p class="text-gray-600 mb-6">
            Transaksi Anda telah berhasil diproses. Terima kasih telah berbelanja bersama kami!
        </p>
        <div class="space-y-4">
            <a href="<?php echo e(route('front.orders.index')); ?>" class="bg-green-500 text-white py-2 px-4 rounded">Pesanan Saya</a>
            <a href="<?php echo e(route('front.product')); ?>" class="bg-gray-300 text-gray-600 py-2 px-4 rounded">Kembali Belanja</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/success.blade.php ENDPATH**/ ?>