<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        return response()->json(Produit::all(), 200);
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_produit' => 'nullable|string|max:10',
            'quantite' => 'nullable|numeric',
            'qualite' => 'nullable|integer',
            'date_prod' => 'nullable|date',
            'especef' => 'nullable|string|max:20',
        ]);

        $produit = Produit::create($request->all());

        return response()->json($produit, 201);
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        $produit = Produit::find($id);

        if (is_null($produit)) {
            return response()->json(['message' => 'Produit not found'], 404);
        }

        return response()->json($produit, 200);
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_produit' => 'nullable|string|max:10',
            'quantite' => 'nullable|numeric',
            'qualite' => 'nullable|integer',
            'date_prod' => 'nullable|date',
            'especef' => 'nullable|string|max:20',
        ]);

        $produit = Produit::find($id);

        if (is_null($produit)) {
            return response()->json(['message' => 'Produit not found'], 404);
        }

        $produit->update($request->all());

        return response()->json($produit, 200);
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);

        if (is_null($produit)) {
            return response()->json(['message' => 'Produit not found'], 404);
        }

        $produit->delete();

        return response()->json(null, 204);
    }
}
