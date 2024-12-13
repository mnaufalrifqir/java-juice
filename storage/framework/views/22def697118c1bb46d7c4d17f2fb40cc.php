
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
    <!-- Main Content -->
    <main class="container mx-auto my-10">
        <div class="bg-white p-10 rounded-lg shadow-md">
            <div class="text-center mb-6">
                <?php if($transaction->payment_status == 'pending'): ?>
                    <i class="fas fa-exclamation-circle text-red-500 text-4xl"></i>
                    <h1 class="text-2xl font-semibold mt-2 text-red-500">Payment Pending</h1>
                    <p class="text-gray-600 mt-2">Please complete your payment to process your order.</p>
                <?php else: ?>
                    <i class="fas fa-check-circle text-green-500 text-4xl"></i>
                    <h1 class="text-2xl font-semibold mt-2">Thanks for your order!</h1>
                    <p class="text-gray-600 mt-2">Thank you for shopping with us. Your order is being processed. Please wait until it arrives, and don't forget to give us a rating!</p>
                <?php endif; ?>
            </div>
            
            <div class="space-y-6">
                <!-- Transaction Date -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Transaction Date</h2>
                    <p class="text-gray-600"><?php echo e($transaction->created_at->format('l, F d, Y (T)')); ?></p>
                </div>

                <!-- Shipping Method -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Shipping Method</h2>
                    <p class="text-gray-600"><?php echo e($transaction->courier); ?></p>
                </div>

                <!-- Order Items -->
                <div class="border-t border-gray-200 pt-4">
                    <h2 class="font-semibold text-gray-700">Your Order</h2>
                    <?php $__currentLoopData = $transaction->detailsTransaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center space-x-4 justify-between">
                            <div class="flex space-x-4">
                                <img src="<?php echo e(Storage::url($item->product->image)); ?>" alt="<?php echo e($item->product->name); ?>" class="w-16 h-16 rounded" />
                                <p class="text-gray-700"><?php echo e($item->product->name); ?></p>
                                <p class="text-gray-600"><?php echo e($item->product->color); ?></p>
                                <p class="text-gray-600">x<?php echo e($item->quantity); ?></p>
                            </div>
                            <p class="ml-auto text-gray-700 font-bold">Rp. <?php echo e(number_format($item->total_price, 2)); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Order Summary -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex justify-between text-gray-700">
                        <span>Subtotal</span>
                        <span>Rp. <?php echo e(number_format($transaction->subtotal, 2)); ?></span>
                    </div>
                    <div class="flex justify-between text-gray-700">
                        <span>Shipping Cost</span>
                        <span>Rp. <?php echo e(number_format($transaction->shipping_cost, 2)); ?></span>
                    </div>
                    <div class="flex justify-between text-gray-700 font-semibold text-lg mt-4">
                        <span>Grand Total</span>
                        <span>Rp. <?php echo e(number_format($transaction->total, 2)); ?></span>
                    </div>
                </div>

                <div class="flex justify-center space-x-4 mt-6">
                <?php if($transaction->payment_status == 'Pending'): ?>
                    <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Pay Now!</button>
                <?php else: ?>
                    <a href="<?php echo e(route('front.review.create', ['transaction_id' => $transaction->id])); ?>" class="bg-black text-white py-3 px-6 rounded-md">Rate Now</a>
                <?php endif; ?>
                    <a href="<?php echo e(route('front.product')); ?>" class="bg-black text-white py-3 px-6 rounded-md">Continue Shopping</a>
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