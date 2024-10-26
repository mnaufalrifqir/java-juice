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
                <?php echo e(__('Manage Products')); ?>

            </h2>
            <a href=" " class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Add New
            </a>
        </div>
     <?php $__env->endSlot(); ?>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                 <thead class="bg-gray-50">
                  <tr>
                   <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">
                    ID
                   </th>
                   <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">
                    Photo
                   </th>
                   <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">
                    Product Name
                   </th>
                   <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">
                    Description
                   </th>
                   <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">
                    Price
                   </th>
                   <th class="py-2 px-4 border-b text-left text-sm font-semibold text-gray-600">
                    Actions
                   </th>
                  </tr>
                 </thead>
                 <tbody>
                  <tr>
                   <td class="py-2 px-4 border-b text-blue-500">
                    1
                   </td>
                   <td class="py-2 px-4 border-b">
                    <img alt="Product 1 Image" class="h-16 w-16 object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/En9dlYuyfO0ybS2iUexCFsUJQRA6eQqKMhdjJH8YOP3ANaRnA.jpg" width="100"/>
                   </td>
                   <td class="py-2 px-4 border-b">
                    Sample 1
                   </td>
                   <td class="py-2 px-4 border-b">
                    Lorem Ipsum
                   </td>
                   <td class="py-2 px-4 border-b">
                    Rp 250,000.00
                   </td>
                   <td class="py-2 px-4 border-b flex space-x-2">
                    <i class="fas fa-ellipsis-h text-gray-500">
                    </i>
                    <i class="fas fa-eye text-gray-500">
                    </i>
                    <i class="fas fa-edit text-gray-500">
                    </i>
                    <i class="fas fa-trash text-gray-500">
                    </i>
                   </td>
                  </tr>
                  <tr>
                   <td class="py-2 px-4 border-b text-blue-500">
                    2
                   </td>
                   <td class="py-2 px-4 border-b">
                    <img alt="Product 2 Image" class="h-16 w-16 object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/2IsC8BaaYAKUHlxfRkgQ5b2yH1NbBRVIwzVDYSLhWemjGtoTA.jpg" width="100"/>
                   </td>
                   <td class="py-2 px-4 border-b">
                    Sample 2
                   </td>
                   <td class="py-2 px-4 border-b">
                    Lorem Ipsum
                   </td>
                   <td class="py-2 px-4 border-b">
                    Rp 250,000.00
                   </td>
                   <td class="py-2 px-4 border-b flex space-x-2">
                    <i class="fas fa-ellipsis-h text-gray-500">
                    </i>
                    <i class="fas fa-eye text-gray-500">
                    </i>
                    <i class="fas fa-edit text-gray-500">
                    </i>
                    <i class="fas fa-trash text-gray-500">
                    </i>
                   </td>
                  </tr>
                  <tr>
                   <td class="py-2 px-4 border-b text-blue-500">
                    3
                   </td>
                   <td class="py-2 px-4 border-b">
                    <img alt="Product 3 Image" class="h-16 w-16 object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/4buEN10Dhy7DDh95DmPfqQ1wQR8z2neQLXSjyt9vkkzhGtoTA.jpg" width="100"/>
                   </td>
                   <td class="py-2 px-4 border-b">
                    Sample 3
                   </td>
                   <td class="py-2 px-4 border-b">
                    Lorem Ipsum
                   </td>
                   <td class="py-2 px-4 border-b">
                    Rp 250,000.00
                   </td>
                   <td class="py-2 px-4 border-b flex space-x-2">
                    <i class="fas fa-ellipsis-h text-gray-500">
                    </i>
                    <i class="fas fa-eye text-gray-500">
                    </i>
                    <i class="fas fa-edit text-gray-500">
                    </i>
                    <i class="fas fa-trash text-gray-500">
                    </i>
                   </td>
                  </tr>
                  <tr>
                   <td class="py-2 px-4 border-b text-blue-500">
                    4
                   </td>
                   <td class="py-2 px-4 border-b">
                    <img alt="Product 4 Image" class="h-16 w-16 object-cover" height="100" src="https://storage.googleapis.com/a1aa/image/grfNfhnNTKtebpsq74pNtqld9egIDM75G6S6fyn5DEa0zoFdC.jpg" width="100"/>
                   </td>
                   <td class="py-2 px-4 border-b">
                    Sample 4
                   </td>
                   <td class="py-2 px-4 border-b">
                    Lorem Ipsum
                   </td>
                   <td class="py-2 px-4 border-b">
                    Rp 250,000.00
                   </td>
                   <td class="py-2 px-4 border-b flex space-x-2">
                    <i class="fas fa-ellipsis-h text-gray-500">
                    </i>
                    <i class="fas fa-eye text-gray-500">
                    </i>
                    <i class="fas fa-edit text-gray-500">
                    </i>
                    <i class="fas fa-trash text-gray-500">
                    </i>
                   </td>
                  </tr>
                 </tbody>
                </table>
                <div class="bg-gray-50 px-4 py-2 flex justify-between items-center">
                 <button class="text-gray-500">
                  Previous
                 </button>
                 <span class="text-gray-500">
                  1-1 of 4
                 </span>
                 <button class="text-gray-500">
                  Next
                 </button>
                </div>
               </div>
            <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
 
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src=" " alt="" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">sadsadsadsa</h3>
                        </div>
                    </div> 
                    <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Date</p>
                        <h3 class="text-indigo-950 text-xl font-bold">asdasdadd</h3>
                    </div>
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href=" " class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Edit
                        </a>
                        <form action=" " method="POST"> 
                            <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                Delete
                            </button>
                        </form>
                    </div>
                </div> 
            </div> -->
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
<?php /**PATH D:\Project\Backend\java-juice\resources\views/admin/products/index.blade.php ENDPATH**/ ?>