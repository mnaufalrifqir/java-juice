
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
    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row lg:space-x-8">
                <!-- Card Billing Details -->
                <div class="w-full lg:w-2/3 bg-white p-8 shadow rounded-lg">
                    <h2 class="text-2xl font-bold mb-6">Billing details</h2>
                    <form>
                        <!-- Billing form fields go here -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="first-name">First Name</label>
                                
                                <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="first-name" type="text" value="first"/>

                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700" for="last-name">Last Name</label>
                                
                                <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="last-name" type="text" value="last"/>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="street-address">Street address</label>
                            
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="street" type="text" value="address"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="province">Province</label>
                            <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="province">
                                <option value="">Select Province</option>
                                <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($province['province_id']); ?>"><?php echo e($province['province']); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="city">Town / City</label>
                            <select id="city" name="city" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" disabled>
                                <option value="">Select City</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="zip-code">Postal Code</label>
                            
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="postal-code" type="text" value="1341234"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="phone">Phone Number</label>
                            
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="phone-number" type="text" value="12312313"/>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700" for="email">Email address</label>
                            
                            <input class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="email" type="email" value="blbla@gmail.com"/>
                        </div>
                    </form>
                </div>

                <div>
                    <!-- Card Shipping Method -->
                    <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 mb-8 lg:mt-0">
                        <h2 class="text-2xl font-bold mb-6">Choose Shipping Method</h2>
                            <input type="hidden" name="weight" id="weight" value="<?php echo e($totalWeight); ?>">
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700" for="courier">Courier</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="courier" name="courier" required>
                                    <option value="">Select Courier</option>
                                    <option value="jne">JNE</option>
                                    <option value="pos">POS</option>
                                    <option value="tiki">TIKI</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700" for="shipping-option">Shipping Option</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" id="shipping-option" name="shipping-option" required disabled>
                                    <option value="">Select Shipping Option</option>
                                </select>
                            </div>
                    </div>
                    <!-- Card Product Details -->
                    <div class="w-full lg:max-w-sm bg-white p-8 shadow rounded-lg mt-8 lg:mt-0">
                        <h2 class="text-2xl font-bold mb-6">Product Details</h2>
                        <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-4">
                                <div class="flex justify-between">
                                    <span><?php echo e($item->product->name); ?> <span class="text-gray-500">x <?php echo e($item->quantity); ?> pcs</span></span>
                                    <span>Rp. <?php echo e(number_format($item->product->price * $item->quantity, 0, ',', '.')); ?></span>
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
                                <span>Shipping (<?php echo e($totalWeight); ?> gram)</span>
                                <span id="shipping-cost">Rp. <?php echo e(number_format(0, 0, ',', '.')); ?></span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between font-bold text-lg">
                                <span>Total</span>
                                <span id="total" class="text-orange-500">Rp. <?php echo e(number_format($totalAmount, 0, ',', '.')); ?></span>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mb-4">
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our
                            <a class="text-gray-700 font-medium" href="#">privacy policy</a>.
                        </p>
                        <button id="pay-button" class="w-full bg-orange-500 text-white font-bold py-2 rounded-md">Proceed to Payment</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="<?php echo e(config('midtrans.client_key')); ?>"></script>
    <script src="<?php echo e(asset('js/payment.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\Backend\Laravel\java-juice\resources\views/front/checkout.blade.php ENDPATH**/ ?>