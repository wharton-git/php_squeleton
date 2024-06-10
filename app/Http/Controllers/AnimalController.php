<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Sante;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $animals = Animal::all();

        // Retourner les données sous forme de réponse JSON
        return response()->json($animals, 200);
    }
    /**
     * Display a listing of the resource.
     */
    public function indexSante()
    {
        //
        $sante = Sante::all();

        // Retourner les données sous forme de réponse JSON
        return response()->json($sante, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json("Cool");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addAnimal(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'espece' => 'required|string|max:255',
            'race' => 'required|string|max:255',
            'sexe' => 'required|string|max:255',
            'date_naiss' => 'nullable|date',
            'date_enregist' => 'nullable|date',
            'date_vente' => 'nullable|date',
            'date_dece' => 'nullable|date',
            'age' => 'nullable|integer',
            'poids' => 'nullable|numeric',
            'status' => 'nullable|string|max:255',
        ]);

        // Création de l'animal
        $animal = Animal::create($validatedData);

        // Retourner une réponse appropriée incluant l'ID de l'animal
        return response()->json([
            'message' => 'Animal enregistré avec succès',
            'animal_id' => $animal->id,
            'animal' => $animal
        ], 201);
    }

    public function animalSante(Request $request)
    {

        $animalInfo = Sante::create($request->all());

        // Retourner une réponse appropriée
        return response()->json(['message' => 'Informations de l\'animal enregistrées avec succès', 'animal_info' => $animalInfo], 201);
    }


    public function showAnimal($id)
    {
        // Récupération de l'animal existant par son ID
        $animal = Animal::findOrFail($id);

        // Retourner une réponse appropriée incluant les données de l'animal
        return response()->json([
            'animal_id' => $animal->id_animal,
            'animal' => $animal
        ], 200);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function updateAnimal(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'sometimes|required|string|max:255',
            'espece' => 'sometimes|required|string|max:255',
            'race' => 'sometimes|required|string|max:255',
            'sexe' => 'sometimes|required|string|max:255',
            'date_naiss' => 'nullable|date',
            'date_enregist' => 'nullable|date',
            'date_vente' => 'nullable|date',
            'date_dece' => 'nullable|date',
            'age' => 'nullable|integer',
            'poids' => 'nullable|numeric',
            'status' => 'nullable|string|max:255',
        ]);

        // Récupération de l'animal existant par son ID
        $animal = Animal::findOrFail($id);

        // Mise à jour des données de l'animal
        $animal->update($validatedData);

        // Retourner une réponse appropriée incluant l'ID de l'animal et les nouvelles données
        return response()->json([
            'message' => 'Animal mis à jour avec succès',
            'animal_id' => $animal->id,
            'animal' => $animal
        ], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Récupération de l'animal existant par son ID
        $animal = Animal::findOrFail($id);

        // Suppression de l'animal
        $animal->delete();

        // Retourner une réponse appropriée
        return response()->json([
            'message' => 'Animal supprimé avec succès',
            'animal_id' => $animal->id_animal
        ], 200);
    }
}
