<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $user = User::findOrFail($id);

        // Eager load orders and their associated items and products
        $user->load('orders.items.product');
        // Pass the user and their orders to the view
        return view('front.profile.index', compact('user'));
    }
    

    public function show($id) {
        $order = Order::with('user', 'items.product')->findOrFail($id);

        // Return the view with the order data
        return view('front.profile.details', compact('order'));
    }
}
