<!DOCTYPE html>
<html lang="en" class="h-full bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipster Inc | Laravel Assessment</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="h-full font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <section class="flex-grow flex items-center justify-center px-6 py-20 lg:py-32">
            <div class="max-w-6xl w-full text-center space-y-16">
                <div class="space-y-8">
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 tracking-tight">
                        Hipster Inc
                    </h1>
                    <p class="text-2xl sm:text-3xl text-gray-700 font-light max-w-4xl mx-auto leading-relaxed">
                        Advanced Laravel Application featuring<br>
                        <span class="font-semibold text-indigo-600">Multi-Authentication</span>,
                        <span class="font-semibold text-purple-600">Real-time Presence</span>, and
                        <span class="font-semibold text-blue-600">Bulk Product Import</span>
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-5xl mx-auto mt-16">

                    <div class="group relative bg-white rounded-3xl shadow-2xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-3xl border border-gray-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-700 opacity-90"></div>
                        <div class="relative z-10 p-10 text-black text-center space-y-8">
                            <div>
                                <div class="w-20 h-20 mx-auto mb-6 bg-black/20 rounded-full flex items-center justify-center">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <h2 class="text-3xl font-bold">Admin Panel</h2>
                                <p class="mt-4 text-indigo-100 text-lg">
                                    Full system control: manage products, users, and monitor real-time activity
                                </p>
                            </div>

                            <div class="space-y-4">
                                <a href="/admin/login"
                                   class="block w-full bg-white text-indigo-700 py-4 px-8 rounded-xl font-bold text-lg hover:bg-gray-100 transition shadow-lg transform hover:-translate-y-1">
                                    Admin Login
                                </a>
                                <a href="/admin/register"
                                   class="block w-full border-2 border-black text-black py-4 px-8 rounded-xl font-bold text-lg hover:bg-white/10 transition backdrop-blur">
                                    Register as Admin
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group relative bg-white rounded-3xl shadow-2xl overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-3xl border border-gray-100">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500 to-cyan-600 opacity-90"></div>
                        <div class="relative z-10 p-10 text-black text-center space-y-8">
                            <div>
                                <div class="w-20 h-20 mx-auto mb-6 bg-white/20 rounded-full flex items-center justify-center">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <h2 class="text-3xl font-bold">Customer Portal</h2>
                                <p class="mt-4 text-blue-100 text-lg">
                                    Personalized dashboard with secure access and real-time updates
                                </p>
                            </div>

                            <div class="space-y-4">
                                <a href="/customer/login"
                                   class="block w-full bg-white text-blue-700 py-4 px-8 rounded-xl font-bold text-lg hover:bg-gray-100 transition shadow-lg transform hover:-translate-y-1">
                                    Customer Login
                                </a>
                                <a href="/customer/register"
                                   class="block w-full border-2 border-black text-black py-4 px-8 rounded-xl font-bold text-lg hover:bg-white/10 transition backdrop-blur">
                                    Register as Customer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <footer class="bg-gray-900 text-gray-400 py-8 text-center">
            <p class="text-sm">
                Hipster Inc Assessment Submission • January 2026 • All features fully implemented and tested
            </p>
        </footer>
    </div>
</body>
</html><?php /**PATH C:\Users\yasha\hipster-assessment\hipster-assessment\resources\views/welcome.blade.php ENDPATH**/ ?>