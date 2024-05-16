<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminDashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.category.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_name' => 'required|min:2|unique:categories,category_name'
        ]);

        $validate['slug'] = Str::slug($request->category_name);

        Category::create($validate);

        return redirect('/admin/dashboard/category')->with('status', 'New Category has been added!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit', [
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validate = $request->validate([
            'category_name' => 'required|min:2|unique:categories,category_name'
        ]);

        $validate['slug'] = Str::slug($request->category_name);

        Category::where('id', $category->id)->update($validate);

        return redirect('/admin/dashboard/category')->with('status', 'Category has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect('admin/dashboard/category')->with('status', 'Category has been deleted!');
    }
}
