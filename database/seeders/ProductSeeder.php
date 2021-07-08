<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new Product();
        $products->id = 1;
        $products->name = 'Lenovo';
        $products->price = 200000;
        $products->color = 'pink';
        $products->debut_year = '2021-02-09';
        $products->origin = 'Vietnamese';
        $products->category_id = '';
        $products->image = '';
//        $products->brand_id='';
        $products->save();
    }
}
