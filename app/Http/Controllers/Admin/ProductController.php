<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Jobs\ImportProductsJob;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        } else {
            $data['image'] = 'products/default.png'; 
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    
    public function update(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string|max:255',
            'stock' => 'required|integer|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();

        if ($request->hasFile('image')) {
          
            if ($product->image && $product->image !== 'products/default.png') {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('products', 'public');
        }
        

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        
        if ($product->image && $product->image !== 'products/default.png') {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt,xlsx,xls',
        ]);

        $file = $request->file('file');
        $fileContent = $file->get();
        $lines = explode("\n", trim($fileContent));

        if (empty($lines)) {
            return back()->with('error', 'The uploaded file is empty or invalid.');
        }

        $header = str_getcsv(array_shift($lines));
        $rows = [];

        foreach ($lines as $line) {
            if (trim($line)) {
                $row = str_getcsv($line);
                if (count($row) === count($header)) {
                    $rows[] = array_combine($header, $row);
                }
            }
        }

        if (empty($rows)) {
            return back()->with('error', 'No valid data found in the file.');
        }

        $chunks = array_chunk($rows, 1000);

        foreach ($chunks as $chunk) {
            ImportProductsJob::dispatch($chunk);
        }

        return back()->with('success', 'Import queued successfully! Processing in background.');
    }
}