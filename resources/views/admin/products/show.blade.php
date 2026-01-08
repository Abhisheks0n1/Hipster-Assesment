@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 px-8 py-6">
            <h1 class="text-3xl font-bold text-black">{{ $product->name }}</h1>
        </div>

        <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-10">
          
           <div>
                <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/products/default.png') }}"
                alt="{{ $product->name }}"
                class="w-full h-96 object-cover rounded-xl shadow-lg border border-gray-200">
            </div>

           
            <div class="space-y-6">
                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Price</h3>
                    <p class="text-4xl font-bold text-indigo-600 mt-2">{{ number_format($product->price, 2) }}</p>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Category</h3>
                    <p class="text-xl text-gray-900 mt-2">{{ $product->category ?? 'Uncategorized' }}</p>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Stock</h3>
                    <p class="text-xl text-gray-900 mt-2">{{ $product->stock }} units</p>
                </div>

                <div>
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Description</h3>
                    <p class="text-gray-700 mt-2 leading-relaxed">
                        {{ $product->description ?? 'No description provided.' }}
                    </p>
                </div>

                <div class="pt-6 flex space-x-4">
                    <a href="{{ route('products.edit', $product) }}"
                       class="px-6 py-3 bg-indigo-600 text-black rounded-lg hover:bg-indigo-700 transition">
                        Edit Product
                    </a>
                    <a href="{{ route('products.index') }}"
                       class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
                        Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection