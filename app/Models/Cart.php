<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    use HasFactory;

    public $items = null;
    public $Quantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->Quantity = $oldCart->Quantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        //Tao mot phan tu trong gio hang
        $storedItem = ['qty' =>0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            //Kiem tra san pham da ton tai trong gio hang chua
            //Neu co roi thi cap nhat phan tu do
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;

        //Tang tong so luong san pham
        $this->Quantity++;
        //Tinh tong gia tien
        $this->totalPrice += $item->price;
    }
}
