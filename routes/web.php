<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminDashboardProductController;
use App\Http\Controllers\AdminDashboardCategoryController;

Route::get('/', function () {
    return view('home', [
        'products' => Product::latest()->with('category')->paginate(8)->withQueryString()
    ]);
});

Route::get('/all-products', function () {
    return view('all-products', [
        'products' => Product::latest()->filter(request(['search']))->with('category')->paginate(8)->withQueryString(),
        'categories' => Category::all()
    ]);
});

Route::get('/auth', [AuthController::class, 'login']);
Route::get('/admin/dashboard', function () {

    return view('dashboard.index');
});
Route::resource('/admin/dashboard/product', AdminDashboardProductController::class);

Route::resource('/admin/dashboard/category', AdminDashboardCategoryController::class)->except('show');

Route::get('/admin/dashboard/order', [OrderController::class, 'index']);

