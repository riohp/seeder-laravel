<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('product.index', compact('products'));
    }
        
    
}
