

<?php $__env->startSection('title', 'Admin Login'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 via-white to-indigo-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-10">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-indigo-600 mb-2">Hipster Inc</h1>
            <h2 class="text-3xl font-extrabold text-gray-900">
                Admin Login
            </h2>
            <p class="mt-3 text-lg text-gray-600">
                Access the full administration panel
            </p>
        </div>

        <form class="mt-8 space-y-6" method="POST" action="<?php echo e(route('admin.login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required value="<?php echo e(old('email')); ?>"
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="admin@example.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="••••••••">
                </div>
            </div>

            <?php if($errors->any()): ?>
                <div class="rounded-lg bg-red-50 border border-red-200 p-4">
                    <div class="text-sm text-red-800 font-medium">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($error); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div>
                <button type="submit"
                        class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-semibold text-black bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-offset-2 transform transition hover:scale-105">
                    Sign In as Admin
                </button>
            </div>

            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    No admin account yet?
                    <a href="<?php echo e(route('admin.register.form')); ?>" class="font-semibold text-indigo-600 hover:text-indigo-500 underline">
                        Register here
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\yasha\hipster-assessment\hipster-assessment\resources\views/admin/login.blade.php ENDPATH**/ ?>