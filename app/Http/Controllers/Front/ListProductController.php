<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function index() {

        $products = Product::all();

        return view('front.product.index', compact('products'));
    }
}
