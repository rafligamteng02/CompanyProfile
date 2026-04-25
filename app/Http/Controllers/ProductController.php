<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Str;

class ProductController extends Controller
{
     public function index()
    {
        $products = Produk::paginate(10); // tampilkan 10 per halaman
        $categories = Category::all(); 
        return view('produk', compact(['products'],'categories'));
    }
    public function show($slug)
    {
        $product = Produk::where('slug', $slug)->firstOrFail();
        $category = Category::find($product->category_id);
        return view('detailproduk', compact(['product','category']));
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Produk::where('category_id', $category->id)->get();
         $categories = Category::all(); 
        return view('produk', compact(['products'],'categories'));
    }
}
