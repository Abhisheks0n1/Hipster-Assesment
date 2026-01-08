

<?php $__env->startSection('title', 'Customer Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto space-y-12 py-8">

    <div class="text-center py-16 px-8 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-3xl shadow-2xl text-black">
        <h1 class="text-5xl font-extrabold mb-4">
            Welcome back, <?php echo e(auth('customer')->user()->name); ?>! 
        </h1>
        <p class="text-2xl font-light opacity-90">
            Discover our amazing products
        </p>
    </div>

   
    <?php
        $products = \App\Models\Product::paginate(15);  // Increased to 15 for better 5-per-row fill
    ?>

   
    <div>
        <h2 class="text-3xl font-bold text-gray-900 mb-10 text-center">
            Our Products
        </h2>

        <?php if($products->count() == 0): ?>
            <div class="text-center py-20">
                <p class="text-2xl text-gray-500 italic">
                    No products available right now
                </p>
                <p class="text-lg text-gray-600 mt-4">
                    Please check back later!
                </p>
            </div>
        <?php else: ?>
 
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-10">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 flex flex-col">
                        
                        <div class="h-64 bg-gray-100 relative">
                            <img src="<?php echo e($product->image ? asset('storage/' . $product->image) : asset('storage/products/default.png')); ?>"
                                 alt="<?php echo e($product->name); ?>"
                                 class="w-full h-full object-cover">
                            <?php if($product->stock == 0): ?>
                                <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
                                    <span class="text-white text-3xl font-bold">Out of Stock</span>
                                </div>
                            <?php endif; ?>
                        </div>

                       
                        <div class="p-6 space-y-4 flex-grow flex flex-col">
                            <h3 class="text-2xl font-bold text-gray-900">
                                <?php echo e($product->name); ?>

                            </h3>

                            <?php if($product->category): ?>
                                <p class="text-sm text-indigo-600 font-medium uppercase tracking-wide">
                                    <?php echo e($product->category); ?>

                                </p>
                            <?php endif; ?>

                            <div class="flex items-center justify-between mt-auto">
                                <p class="text-3xl font-extrabold text-indigo-600">
                                    <?php echo e(number_format($product->price, 2)); ?>

                                </p>
                                <span class="text-sm text-gray-600">
                                    Stock: <span class="font-bold"><?php echo e($product->stock); ?></span>
                                </span>
                            </div>

                            <?php if($product->description): ?>
                                <p class="text-gray-600 text-sm line-clamp-3 mt-2">
                                    <?php echo e($product->description); ?>

                                </p>
                            <?php endif; ?>

                          
                            <button class="w-full mt-6 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold rounded-2xl shadow-lg transition transform hover:scale-105">
                                View Product
                            </button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="mt-16 flex justify-center">
                <?php echo e($products->links()); ?>

            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yasha\hipster-assessment\hipster-assessment\resources\views/customer/dashboard.blade.php ENDPATH**/ ?>