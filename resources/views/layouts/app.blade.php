<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hipster Assessment - @yield('title')</title>
    @vite(['resources/css/app.css'])
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
    @auth('admin')
        <span class="text-white">Welcome, {{ auth('admin')->user()->name }}</span>
        <form method="POST" action="{{ route('admin.logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-black hover:text-indigo-200 transition">
                Logout
            </button>
        </form>
    @endauth

    @auth('customer')
        <span class="text-white">Welcome, {{ auth('customer')->user()->name }}</span>
        <form method="POST" action="{{ route('customer.logout') }}" class="inline">
            @csrf
            <button type="submit" class="text-black hover:text-indigo-200 transition">
                Logout
            </button>
        </form>
    @endauth
</div>
                </div>
            </div>
        </nav>

        <main class="flex-grow">
            <div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>