<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard.order', [
            'orders' => Order::with(['user', 'product'])->get()
        ]);
    }
}
