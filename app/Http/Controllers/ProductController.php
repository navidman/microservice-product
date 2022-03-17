<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {

    }

    public function show($product_no)
    {

    }

    public function update(Request $request, $product_no)
    {

    }

    public function destroy($product_no)
    {

    }
}
