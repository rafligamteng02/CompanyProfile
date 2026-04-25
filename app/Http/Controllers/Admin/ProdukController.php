<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
public function index()
{
    $products = Produk::paginate(10); // tampilkan 10 per halaman
    return view('admin.products.index', compact('products'));
}


    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $slug = Str::slug($request->name, '-');
        $file = $request->file('image');
        $dir = public_path('images/media/');
        $filename = time().Str::random(10).'.'.$file->getClientOriginalExtension()?:'png';
        $file->move($dir,$filename);
        // $request->merge(['cover'=>$filename,'slug'=>$slug]);
        // Produk::create($request->all());
        $data = new Produk();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->stock = $request->stock;
        $data->description = $request->description;
        $data->spesification = $request->spesification;
        $data->category_id = $request->category_id;
        $data->image = $filename;
        $data->slug = $slug;
        $data->save();
        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Produk $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Produk $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string',
            'spesification' => 'nullable|string',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Produk $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil dihapus!');
    }
}
