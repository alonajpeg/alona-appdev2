<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "name" => "Alona Pegarit",
                "username" => "alonapegarit",
                "email" => "alonapegarit@gmail.com",
                "phone" => "0912-345-6789",
            ],
            [
                "id" => 2,
                "name" => "Mama ko",
                "username" => "mamako",
                "email" => "mamanialona@gmail.com",
                "phone" => "0912-345-6789",
            ],
            [
                "id" => 3,
                "name" => "Papa ko",
                "username" => "papako",
                "email" => "papanialona@gmail.com",
                "phone" => "0912-345-6789",
            ],
        ];

        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "message" => "STORED: has been stored successfully."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "message" => "STORED: has been stored successfully."
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "message" => "UPDATED id: " . $id . " has been updated successfully."
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "message" => "DELETED id: " . $id . " has been deleted."
        ]);
    }
}
