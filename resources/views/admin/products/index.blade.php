@extends('layouts.app')

@section('title', 'Products Management')

@section('content')
<div class="space-y-8">
    
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-900">Products Management</h1>
        <a href="{{ route('products.create') }}"
           class="bg-green-600 hover:bg-green-700 text-black font-bold py-3 px-6 rounded-lg shadow-md transition transform hover:scale-105">
            Add New Product
        </a>
    </div>

   
    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-lg shadow">
            {{ session('success') }}
        </div>
    @endif

  
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
        <div class="px-6 py-5 bg-gradient-to-r from-indigo-600 to-indigo-700">
            <h2 class="text-xl font-semibold text-black">All Products</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stock</th>
                        <th class="px-6 py-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($products as $product)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $product->id }}</td>
                            <td class="px-6 py-4">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('storage/products/default.png') }}"
                            alt="{{ $product->name }}"
                            class="h-16 w-16 object-cover rounded-lg shadow border border-gray-200">
                        </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $product->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ number_format($product->price, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">{{ $product->category ?? '—' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $product->stock }}</td>
                            <td class="px-6 py-4 text-center space-x-3">
                                <a href="{{ route('products.show', $product) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">View</a>
                                <a href="{{ route('products.edit', $product) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this product?')" class="text-red-600 hover:text-red-800 font-medium">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                No products found. <a href="{{ route('products.create') }}" class="text-indigo-600 underline">Create one now</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="px-6 py-4 bg-gray-50">
            {{ $products->links() }}
        </div>
    </div>

 
    <div class="bg-white shadow-xl rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Bulk Import Products (up to 100,000)</h2>
        <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center space-x-6">
                <input type="file" name="file" accept=".csv,.xlsx" required
                       class="block w-full text-sm text-gray-700 file:mr-4 file:py-3 file:px-6 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-black font-bold py-3 px-8 rounded-lg shadow-md transition transform hover:scale-105">
                    Import CSV/Excel
                </button>
            </div>
            <p class="mt-4 text-sm text-gray-600">
                Use the provided <code class="bg-gray-100 px-2 py-1 rounded">products_sample_import.csv</code> for testing.
            </p>
        </form>
    </div>
</div>
@endsection