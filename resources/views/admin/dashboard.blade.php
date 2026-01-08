@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="max-w-7xl mx-auto space-y-10">
    <div class="bg-white shadow-2xl rounded-3xl overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-600 to-purple-700 px-8 py-10 text-black">
            <h1 class="text-4xl font-extrabold mb-3">
                Admin Dashboard
            </h1>
            <p class="text-4xl text-black-900">
               Welcome back, <span class="font-semibold">{{ auth('admin')->user()->name }}</span>!
            </p>

        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <a href="{{ route('products.index') }}" 
           class="bg-white rounded-2xl shadow-lg p-8 text-center hover:shadow-2xl hover:scale-105 transition transform">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Manage Products</h3>
            <p class="text-gray-600">Full CRUD + Bulk Import (100k+)</p>
        </a>

        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Real-time Presence</h3>
            <p class="text-gray-600">Live online user tracking</p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">System Status</h3>
            <p class="text-green-600 font-semibold">All systems operational</p>
        </div>
    </div>

<div class="mt-12 bg-white rounded-3xl shadow-2xl p-8">
    <h2 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
        <span class="w-4 h-4 bg-green-500 rounded-full mr-3 animate-pulse"></span>
        Online Customers (Real-time)
    </h2>

    @php
        $onlineCustomers = \App\Models\Customer::where('is_online', true)->get();
    @endphp

    <div class="space-y-4">
        @if($onlineCustomers->count() == 0)
            <p class="text-center text-gray-500 italic py-8">
                No customers currently online
            </p>
        @else
            @foreach($onlineCustomers as $customer)
                <div class="flex items-center justify-between bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl p-5 shadow-md hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            {{ Str::upper(substr($customer->name, 0, 1)) }}
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-lg">{{ $customer->name }}</p>
                            <p class="text-sm text-gray-600">Customer Account</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-full text-sm">
                            ● Online
                        </span>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <p class="text-sm text-gray-500 mt-6 text-center">
        Status based on customer login activity • Refresh page to update
    </p>
</div>

<script>

    Echo.join('presence.users')
        .here((users) => {
            console.log('Users currently online:', users);
            renderOnlineUsers(users);
        })
        .joining((user) => {
            console.log('User joined:', user);
            renderOnlineUsers(getCurrentUsers().concat(user));
        })
        .leaving((user) => {
            console.log('User left:', user);
            renderOnlineUsers(getCurrentUsers().filter(u => u.id !== user.id));
        })
        .error((error) => {
            console.error('Presence channel error:', error);
        });

    function getCurrentUsers() {
        return Array.from(document.querySelectorAll('#online-users-container .user-item'))
            .map(el => JSON.parse(el.dataset.user));
    }

    function renderOnlineUsers(users) {
        const container = document.getElementById('online-users-container');
        container.innerHTML = '';

        if (users.length === 0) {
            container.innerHTML = '<p class="text-center text-gray-500 italic py-8">No users currently online</p>';
            return;
        }

        users.forEach(user => {
            const div = document.createElement('div');
            div.className = 'user-item flex items-center justify-between bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-5 shadow-md hover:shadow-lg transition';
            div.dataset.user = JSON.stringify(user);

            div.innerHTML = `
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                        ${user.name ? user.name.charAt(0).toUpperCase() : 'U'}
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800 text-lg">${user.name || 'Anonymous User'}</p>
                        <p class="text-sm text-gray-600">${user.guard.charAt(0).toUpperCase() + user.guard.slice(1)} Account</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="inline-block px-4 py-2 bg-green-600 text-white font-semibold rounded-full text-sm">
                        ● Online
                    </span>
                </div>
            `;
            container.appendChild(div);
        });
    }
</script>
@endsection