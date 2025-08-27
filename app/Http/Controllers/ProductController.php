<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = [];
        $products = $this->productRepository->all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $products = [];
        $products = $this->productRepository->find($id);
        return view('products.show', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description', 'price','sku','quantity','warranty','status','type']);
        $this->productRepository->create($data);
        return 'success';
    }

    public function edit($id)
    {
        // Logic to show a form for editing an existing product
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing product
    }

    public function destroy($id)
    {
        // Logic to delete a product
    }
}
