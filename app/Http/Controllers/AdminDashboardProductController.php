<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminDashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'all_products' => Product::all(),
            'products' => Product::latest()->filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'product_name' => 'required|min:5|max:255|unique:products,product_name',
            'description' => 'required|min:5|max:255',
            'price' => 'required',
            'stock' => 'required',
            'rating' => 'nullable',
            'id_category' => 'required',
            'discount' => 'nullable',
            'image' => 'file|image|max:15360',
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::slug($request->product_name) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('products', $name);
            $image = $path;
        }

        $validate['image'] = $image;
        $validate['slug'] = Str::slug($request->product_name);

        Product::create($validate);

        return redirect('/admin/dashboard/product')->with('status', 'New Product has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.product.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'product_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'id_category' => 'required',
            'discount' => 'nullable',
            'rating' => 'nullable',
            'image' => 'file|image|max:15360',
        ]);

        $images = $product->image;

        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $file = $request->file('image');
            $name = Str::slug($request->product_name) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('products', $name);
            $images = $path;
        }

        $validate['image'] = $images;
        $validate['slug'] = Str::slug($request->product_name);

        Product::where('id', $product->id)
            ->update($validate);

        return redirect('/admin/dashboard/product')->with('status', 'Product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        Product::destroy($product->id);

        return redirect('admin/dashboard/product')->with('status', 'Product has been deleted!');
    }
}
