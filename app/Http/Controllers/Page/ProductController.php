<?php

namespace App\Http\Controllers\Page;

//use App\Http\Services\ProductService;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }
    public function index(){
     $products = $this->productService->getAll();
    return view('frontend.home',compact('products'));
    }

}
