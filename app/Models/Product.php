<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    function categories(){
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }

    function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    protected $fillable=[
        'name','price','color','debut_year','origin'
    ];
}
