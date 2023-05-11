<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        $product = Product::paginate(8);
        return view('product.index', compact('category', 'product'));
    }

    public function filter($id)
    {
        $category = Categories::all();
        $product = Product::where('category_id',$id)->get();
        return view('product.index', compact('category', 'product'));

    }

    public function cart()
    {
        return view('product.cart');
    }

    public function payment()
    {
        return view('product.payment');        
    }
}
