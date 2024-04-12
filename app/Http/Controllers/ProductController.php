<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'price' => 100,
            'description' => 'This is Product 1',
        ],[
            'id' => 2,
            'name' => 'Product 2',
            'price' => 200,
            'description' => 'This is Product 2',
        ],[
            'id' => 3,
            'name' => 'Product 3',
            'price' => 300,
            'description' => 'This is Product 3',
        ],[
            'id' => 4,
            'name' => 'Product 4',
            'price' => 400,
            'description' => 'This is Product 4',
        ],[
            'id' => 5,
            'name' => 'Product 5',
            'price' => 500,
            'description' => 'This is Product 5',
        ]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "Display product with id: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "Product with ID: " . $id . " deleted"
        ]);
    }
}
