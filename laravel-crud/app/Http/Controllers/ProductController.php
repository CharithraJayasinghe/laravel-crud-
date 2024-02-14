<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate request
        $request->validate([
            'name'=>'required',
            'details'=>'required'
        ]);
        //create product
        $createdProduct = $this->productRepository->createProduct($request);

        //display user-friendly message
        return response()->json(['message' => 'Product created successfully', 'data' => $createdProduct], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return $this->productRepository->getAll();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'details'=>'required'
        ]);
       $updatedProduct = $this->productRepository->updateProduct($request, $id);
       return response()->json(['message' => 'Product updated successfully', 'data' => $updatedProduct], 201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedProduct = $this->productRepository->deleteProduct($id);
        return response()->json(['message' => 'Product deleted successfully', 'data' => $deletedProduct], 201);

    }
}
