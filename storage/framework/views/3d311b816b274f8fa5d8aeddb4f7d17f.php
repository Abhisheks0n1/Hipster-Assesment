

<?php $__env->startSection('title', $product->name); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-8 py-6">
            <h1 class="text-3xl font-bold text-black"><?php echo e($product->name); ?></h1>
        </div>

        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-10">
          
           <div>
                <img src="<?php echo e($product->image ? asset('storage/' . $product->image) : asset('storage/products/default.png')); ?>"
                alt="<?php echo e($product->name); ?>"
                class="w-full h-96 object-cover rounded-xl shadow-lg border border-gray-200">
            </div>

           
            <div class="space-y-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Price</h3>
                    <p class="text-4xl font-bold text-indigo-600 mt-2"><?php echo e(number_format($product->price, 2)); ?></p>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Category</h3>
                    <p class="text-xl text-gray-900 mt-2"><?php echo e($product->category ?? 'Uncategorized'); ?></p>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Stock</h3>
                    <p class="text-xl text-gray-900 mt-2"><?php echo e($product->stock); ?> units</p>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Description</h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        <?php echo e($product->description ?? 'No description provided.'); ?>

                    </p>
                </div>

                <div class="pt-6 flex space-x-4">
                    <a href="<?php echo e(route('products.edit', $product)); ?>"
                       class="px-6 py-3 bg-indigo-600 text-black rounded-lg hover:bg-indigo-700 transition">
                        Edit Product
                    </a>
                    <a href="<?php echo e(route('products.index')); ?>"
                       class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yasha\hipster-assessment\hipster-assessment\resources\views/admin/products/show.blade.php ENDPATH**/ ?>