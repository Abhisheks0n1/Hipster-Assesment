@extends('layouts.app')

@section('title', 'Customer Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-10">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-600 mb-2">Hipster Inc</h1>
            <h2 class="text-3xl font-extrabold text-gray-900">
                Customer Login
            </h2>
            <p class="mt-3 text-lg text-gray-600">
                Welcome back to your account
            </p>
        </div>

        <form class="mt-8 space-y-6" method="POST" action="{{ route('customer.login') }}">
            @csrf

            <div class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}"
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="customer@example.com">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="••••••••">
                </div>
            </div>

            @if ($errors->any())
                <div class="rounded-lg bg-red-50 border border-red-200 p-4">
                    <div class="text-sm text-red-800 font-medium">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                </div>
            @endif

            <div>
                <button type="submit"
                        class="w-full flex justify-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-semibold text-black bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-offset-2 transform transition hover:scale-105">
                    Sign In as Customer
                </button>
            </div>

            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    New here?
                    <a href="{{ route('customer.register.form') }}" class="font-semibold text-blue-600 hover:text-blue-500 underline">
                        Create an account
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection