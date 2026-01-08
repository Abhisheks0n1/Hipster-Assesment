<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipster Assessment - <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="h-full font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-gradient-to-r from-indigo-600 to-indigo-800 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-black text-2xl font-bold tracking-tight">Hipster</span>
                        <span class="text-indigo-200 text-xl font-light ml-1">Inc</span>
                    </div>

                    <div class="flex items-center space-x-4">
    <?php if(auth()->guard('admin')->check()): ?>
        <span class="text-white">Welcome, <?php echo e(auth('admin')->user()->name); ?></span>
        <form method="POST" action="<?php echo e(route('admin.logout')); ?>" class="inline">
            <?php echo csrf_field(); ?>
            <button type="submit" class="text-black hover:text-indigo-200 transition">
                Logout
            </button>
        </form>
    <?php endif; ?>

    <?php if(auth()->guard('customer')->check()): ?>
        <span class="text-white">Welcome, <?php echo e(auth('customer')->user()->name); ?></span>
        <form method="POST" action="<?php echo e(route('customer.logout')); ?>" class="inline">
            <?php echo csrf_field(); ?>
            <button type="submit" class="text-black hover:text-indigo-200 transition">
                Logout
            </button>
        </form>
    <?php endif; ?>
</div>
                </div>
            </div>
        </nav>

        <main class="flex-grow">
            <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>
</body>
</html><?php /**PATH C:\Users\yasha\hipster-assessment\hipster-assessment\resources\views/layouts/app.blade.php ENDPATH**/ ?>