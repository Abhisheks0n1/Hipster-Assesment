

<?php $__env->startSection('title', 'Create New Product'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-900 mb-8">Create New Product</h1>

    <div class="bg-white shadow-2xl rounded-2xl p-8">
        <form method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                        <input type="text" name="name" required value="<?php echo e(old('name')); ?>"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Price</label>
                        <input type="number" name="price" step="0.01" required value="<?php echo e(old('price')); ?>"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                        <input type="text" name="category" value="<?php echo e(old('category')); ?>"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Stock Quantity</label>
                        <input type="number" name="stock" required value="<?php echo e(old('stock')); ?>"
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="description" rows="6"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"><?php echo e(old('description')); ?></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>
                        <input type="file" name="image" accept="image/*"
                               class="block w-full text-sm text-gray-700 file:mr-4 file:py-3 file:px-6 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        <p class="mt-2 text-xs text-gray-500">Optional. Leave blank to use default image.</p>
                    </div>
                </div>
            </div>

            <?php if($errors->any()): ?>
                <div class="mt-8 rounded-lg bg-red-50 border border-red-200 p-6">
                    <div class="text-sm text-red-800 font-medium">
                        <ul class="list-disc pl-5 space-y-1">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <div class="mt-10 flex justify-end space-x-4">
                <a href="<?php echo e(route('products.index')); ?>" class="px-8 py-4 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                    Cancel
                </a>
                <button type="submit"
                        class="px-10 py-4 bg-indigo-600 hover:bg-indigo-700 text-black font-bold rounded-lg shadow-lg transition transform hover:scale-105">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yasha\hipster-assessment\hipster-assessment\resources\views/admin/products/create.blade.php ENDPATH**/ ?>