<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;


use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

//    public function getCategory()
//    {
//        $categories = Category::all();
//        return view('admin.layout.master',compact('categories'));
//    }

// show thể loại máy tính cá nhân
    public function showCategory()
    {
        $products = $this->productService->getAll();
        return view('admin.layout.category', compact('products'));
    }
 // show thể loaiij máy tính chơi game
    public function showCategory2()
    {
        $products = $this->productService->getAll();
        return view('admin.layout.category2', compact('products'));
    }

    public function index()
    {
        $products = $this->productService->getAll();
//        $category = Category::all();
        return view('admin.backend.list', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.backend.add', compact('brands', 'categories'));
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return ['message' => 'success', 'code' => 200];
    }

    public function getProduct($id)
    {
        return $this->productService->getById($id);
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return response()->json(['data' => 'removed'], 200);
    }

    public function destroy($id)
    {
        $this->productService->delete($id);
        return redirect()->route('product.list');
    }

    public function showUpdate($idproduct)
    {
        $brands = Brand::all();
        $product = Product::find($idproduct);
        return view('admin.backend.update', compact('brands', 'product'));
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->debut_year = $request->debut_year;
        $product->origin = $request->origin;
        $product->image = $request->image;
        $product->brand_id = $request->brand_id;
        $product->save();
        return redirect()->route('product.list');
    }

    public function brand(){
        $products = $this->productService->getAll();
        return view('admin.layout.brand.brand', compact('products'));
    }
}

