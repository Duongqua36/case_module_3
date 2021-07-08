<?php


namespace App\Http\Repositories\Page;


use App\Models\Product;

class ProductRepository
{
    protected Product $productModel;

    public function __construct(Product $product)
    {
        $this->productModel = $product;

    }
    public function getAll(){
        return $this->productModel->with('brand')->get();
    }
}
