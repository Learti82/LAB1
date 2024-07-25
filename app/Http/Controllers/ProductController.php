<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the resource with search and filter
    public function index(Request $request)
    {
        $query = Product::query();

        // Search by name
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Filter by min price
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        // Filter by max price
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        $products = $query->paginate(10); // Paginate results

        return view('products.index', compact('products'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index');
    }

    // Show the form for editing the specified resource
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index');
    }

    // Remove the specified resource from storage
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
