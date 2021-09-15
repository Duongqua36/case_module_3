<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class ProductService
{
    protected ProductRepository $productRepo;


    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepo = $productRepository;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }

    function store( $request)
    {
        $products = new Product();
        $products ->fill($request->all());
        $products->name = $request->name;
        $products->brand_id = $request->brand_id;
        $products->category_id = $request->category_id;
        $file = $request->image;
        if ($request->hasFile('image')){
            $newFile = time() . '-'. $request->name . $file->getClientOriginalExtension();
            $request->file('image')->storeAs('public/images',$newFile);
            $products->image= $newFile;
        }
        $this->productRepo->store($products);
    }

    public function getById($id){
        return $this->productRepo->getById($id);
    }
    public function delete($id){
        $product = $this->productRepo->getById($id);
        $product->delete();
    }
}
