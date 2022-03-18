<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        $product = Product::create([
            'user_id' => Auth::user()->id,
            'title' => $data->title,
            'product_no' => self::generateProductNo(),
            'amount' => $data->amount,
            'description' => $data->description,
        ]);
        DB::commit();
        return $product;
    }

    public function getProduct($product_no)
    {
        return Product::select(['title', 'product_no', 'description', 'amount',])
            ->whereProductNo($product_no)
            ->whereUserId(Auth::user()->id)
            ->first();
    }

    public function updateProduct($data, $product)
    {
        DB::beginTransaction();
        $product->update([
            'title' => $data->title,
            'amount' => $data->amount,
            'description' => $data->description
        ]);
        DB::commit();
        return $product;
    }

    private function generateProductNo () {
        $length = 7;
        $count = 1;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $productNo = '';
        for ($x = 0; $x < $count; $x++) {
            if ($productNo !== '') {
                $productNo .= '-';
            }
            for ($i = 0; $i < $length; $i++) {
                $productNo .= $characters[rand(0, strlen($characters) - 1)];
            }
        }
        if (Product::withoutTrashed()->whereProductNo($productNo)->exists()) {
            return self::generateProductNo();
        }
        return $productNo;
    }

}
