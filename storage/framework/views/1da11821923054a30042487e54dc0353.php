
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
                <i class="fas fa-star text-[#ff9c1a] text-4xl"></i>
                <h1 class="text-2xl font-semibold mt-2">Leave Your Feedback</h1>
                <p class="text-gray-600 mt-2">We value your feedback! Please rate and review your transaction and purchased products.</p>
            </div>

            <form id="feedback-form" method="POST" action="<?php echo e(route('front.review.store', $transaction->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="space-y-6">
                    <!-- Transaction Feedback -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="font-semibold text-gray-700">Transaction Feedback</h2>
                        <div class="rating-box">
                            <label class="text-gray-700">Rating</label>
                            <div class="stars">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <i class="fa-solid fa-star text-gray-400" data-value="<?php echo e($i); ?>" data-type="transaction"></i>
                                <?php endfor; ?>
                            </div>
                            <input type="hidden" name="transaction[rating]" id="transaction_rating">
                        </div>
                        <div class="mt-4">
                            <label class="text-gray-700">Comment</label>
                            <textarea name="transaction[comment]" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"></textarea>
                        </div>
                    </div>

                    <!-- Product Feedback -->
                    <div class="border-t border-gray-200 pt-4">
                        <h2 class="font-semibold text-gray-700">Product Feedback</h2>
                        <?php $__currentLoopData = $transaction->detailsTransaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="border-b border-gray-200 py-4">
                                <div class="flex items-center space-x-4">
                                    <img src="<?php echo e(Storage::url($item->product->image)); ?>" alt="<?php echo e($item->product->name); ?>" class="w-16 h-16 rounded">
                                    <input type="hidden" name="products[<?php echo e($item->product_id); ?>][details_transaction_id]" value="<?php echo e($item->id); ?>">
                                    <p class="font-semibold text-gray-700"><?php echo e($item->product->name); ?></p>
                                </div>
                                <div class="mt-4">
                                    <label class="text-gray-700">Rating</label>
                                    <div class="stars">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <i class="fa-solid fa-star text-gray-400" data-value="<?php echo e($i); ?>" data-product="<?php echo e($item->id); ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <input type="hidden" name="products[<?php echo e($item->product_id); ?>][rating]" id="product_rating_<?php echo e($item->id); ?>">
                                </div>
                                <div class="mt-4">
                                    <label class="text-gray-700">Comment</label>
                                    <textarea name="products[<?php echo e($item->product_id); ?>][comment]" rows="4" class="w-full p-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none"></textarea>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-6">
                        <button type="submit" class="bg-blue-500 text-white py-3 px-6 rounded-md font-semibold">
                            Submit All Feedback
                        </button>
                    </div>
                </div>
            </form>
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

<?php $__env->startPush('after-scripts'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <script src="<?php echo e(asset('js/rating.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/rating.css')); ?>"/>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/review/create.blade.php ENDPATH**/ ?>