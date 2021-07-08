<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;


use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('admin.backend.list', compact('products'));
    }

    public function create()
    {
        $brands = Brand::all();
        return view('admin.backend.add', compact('brands'));
    }

    public function store(Request $request)
    {
        $this->productService->store($request);
        return redirect()->route('product.list');
    }

    public function destroy($id){
        $this->productService->delete($id);
        return redirect()->route('product.list');
    }

    public function edit(Request $request,$id){
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->delete();
            DB::commit();
            toastr()->success('Edit success');
        } catch (\PDOException $exception) {
            DB::rollBack();
            toastr()->error('Error database');
        }
        return redirect()->route('users.index');
    }

}
