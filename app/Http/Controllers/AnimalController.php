<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return response()->json($animals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'nullable|string|max:20',
            'espece' => 'nullable|string|max:20',
            'race' => 'nullable|string|max:20',
            'sexe' => 'nullable|string|max:10',
            'date_naiss' => 'nullable|date',
            'date_enregist' => 'nullable|date',
            'date_vente' => 'nullable|date',
            'date_dece' => 'nullable|date',
            'age' => 'nullable|integer',
            'poids' => 'nullable|numeric',
            'status' => 'nullable|string|max:10',
            'vaccin' => 'nullable|string|max:10',
            'vermifuge' => 'nullable|boolean',
            'date_vacc' => 'nullable|date',
            'date_verm' => 'nullable|date',
            'maladie' => 'nullable|string|max:10',
            'blessure' => 'nullable|string|max:10',
            'date_trait' => 'nullable|date',
            'etat' => 'nullable|string',
            'gestation' => 'nullable|boolean',
        ]);

        $animal = Animal::create($request->all());

        return response()->json($animal, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return response()->json($animal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'nullable|string|max:20',
            'espece' => 'nullable|string|max:20',
            'race' => 'nullable|string|max:20',
            'sexe' => 'nullable|string|max:10',
            'date_naiss' => 'nullable|date',
            'date_enregist' => 'nullable|date',
            'date_vente' => 'nullable|date',
            'date_dece' => 'nullable|date',
            'age' => 'nullable|integer',
            'poids' => 'nullable|numeric',
            'status' => 'nullable|string|max:10',
            'vaccin' => 'nullable|string|max:10',
            'vermifuge' => 'nullable|boolean',
            'date_vacc' => 'nullable|date',
            'date_verm' => 'nullable|date',
            'maladie' => 'nullable|string|max:10',
            'blessure' => 'nullable|string|max:10',
            'date_trait' => 'nullable|date',
            'etat' => 'nullable|string',
            'gestation' => 'nullable|boolean',
        ]);

        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return response()->json($animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return response()->json(null, 204);
    }
}
