<?php

namespace App\Repositories\Interfaces;

interface ProductRepositoryInterface
{
    public function getAllProducts();

    public function storeProduct($data);

    public function getProduct($product_no);

    public function updateProduct($data, $product);
}
