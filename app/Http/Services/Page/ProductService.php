<?php


namespace App\Http\Services\Page;


use App\Http\Repositories\ProductRepository;

class ProductService
{
    protected ProductRepository $productRepo;

    public function __construct(ProductRepository $productRepository)
    {
    $this->productRepo = $productRepository;
    }
    public function getAll(){
      return  $this->productRepo->getAll();
    }
}
