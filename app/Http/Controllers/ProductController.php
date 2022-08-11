<?php
 
namespace App\Http\Controllers;
 
use App\Models\Product;
use Illuminate\Http\Request;
 
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
 
        return view('products.index', compact('products'))
             ->with('i', (request()->input('page', 1) - 1) * 10);
    }
 
    public function create()
    {
        return view('products.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_released_year' => 'required',
            'movie_description' => 'required',
        ]);
 
        Product::create($request->all());
 
        return redirect()
            ->route('products.index')
            ->with('success', 'Movie has successfully created.');
    }
 
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
 
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
 
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'movie_name' => 'required',
            'movie_released_year' => 'required',
            'movie_description' => 'required',
        ]);
 
        $product->update($request->all());
 
        return redirect()
            ->route('products.index')
            ->with('success', 'Product has successfully updated.');
    }
 
    public function destroy(Product $product)
    {
        $product->delete();
 
        return redirect()
            ->route('products.index')
            ->with('success', 'Product has successfully deleted.');
    }
}