<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $products = $this->repository->getAllProducts();
        return response($products, Response::HTTP_OK);
    }

    public function store(ProductRequest $request)
    {
        $product = $this->repository->storeProduct($request);
        return response($product, Response::HTTP_OK);
    }

    public function show($product_no)
    {
        $product = $this->repository->getProduct($product_no);
        if (is_null($product)) {
            return response(null, Response::HTTP_NOT_FOUND);
        }
        return response($product, Response::HTTP_OK);
    }

    public function update(ProductRequest $request, $product_no)
    {
        $product = $this->repository->getProduct($product_no);
        if (is_null($product)) {
            return response(null, Response::HTTP_NOT_FOUND);
        }
        $this->repository->updateProduct($request, $product);
        return response($product, Response::HTTP_OK);
    }

    public function destroy($product_no)
    {
        $product = $this->repository->getProduct($product_no);
        if (is_null($product)) {
            return response(null, Response::HTTP_NOT_FOUND);
        }
        return response(null, Response::HTTP_OK);
    }
}
