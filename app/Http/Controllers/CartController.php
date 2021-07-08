<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart');
        return view('frontend.cart', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        // khoi tao gio hang
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        // luu du lieu gio hang
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm vào giỏ hàng thành công');
        return redirect()->back();

    }
}
