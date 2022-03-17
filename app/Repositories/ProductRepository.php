<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProducts()
    {
        return Product::select([
            'title', 'product_no', 'description', 'amount'])
            ->whereUserId(Auth::user()->id)
            ->get();
    }

    public function storeProduct($data)
    {

    }

    public function getProduct($product_no)
    {

    }

    public function updateProduct($data, $product)
    {

    }


}
