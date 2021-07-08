<?php


namespace App\Http\Repositories;


use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductRepository
{
    protected Product $productModel;


    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function getAll()
    {
        return $this->productModel->with('brand')->get();
    }

    function store($product)
    {
        $product->save();
    }

    public function getById($id)
    {
        return Product::findOrFail($id);
    }

    public function destroy($product)
    {
        DB::beginTransaction();
        try {
            $product->categorys()->detach();
            $product->delete();
            DB::commit();
            toastr()->success('Delete success');
        }catch (\Exception $e ){
         DB::rollBack();
         toastr()->success('Delete error');
        }

    }
}
