<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getProducts($idCategory)
    {
        $category = Category::findOrFail($idCategory);
        $products = $category->products;
    }
}
