<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationMedecinController extends Controller
{
    public function getAllOperations()
    {
        $userId = Auth::id();

        // Récupérer les opérations ajoutées par l'utilisateur authentifié
        $operations = Operation::where('user_id', $userId)->get();
        return view('Dashboard.Operation.ListesOperation', compact('operations'));
    }
    public function store(Request $request)
    {
        // Validez les données entrées par l'utilisateur
        $request->validate([
            'nom' => 'required',
            'ville' => 'required',
            'tarifs' => 'required|numeric',
            'date' => 'required|date',
            'duree' => 'required',
            'medecin' => 'required',
            'etablissement_medical' => 'required',
            'numero_chambre' => 'nullable|integer',
            'documents_associes' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajout de validation pour l'image
        ]);

        // Upload de l'image
        $filename = time() . '_' . $request->file("image")->getClientOriginalName();
        $path = $request->file('image')->move(public_path('uploads'), $filename);

        // Ajoutez 'statut' avec une valeur par défaut
        $data = $request->all();
        $data['statut'] = 'en attente';

        // Ajoutez le nom du fichier d'image à $data
        $data['image'] = $filename;

        // Créez une nouvelle opération avec les données fournies
        Operation::create($data);

        // Redirigez l'utilisateur vers une page de confirmation avec un message de succès
        return redirect()->route('operationsDashMedecin.store')->with('success', 'Opération ajoutée avec succès.');
    }



    public function destroy($id)
    {
        // Recherchez l'opération par son ID
        $operation = Operation::findOrFail($id);

        // Supprimez l'opération
        $operation->delete();

        // Redirigez l'utilisateur vers une page de confirmation avec un message de succès
        return redirect()->route('operationsDashMedecin.store')->with('success', 'Opération supprimée avec succès.');
    }
    public function update(Request $request, $id)
    {
        // Validez les données entrées par l'utilisateur
        $request->validate([
            'nom' => 'required',
            'ville' => 'required',
            'tarifs' => 'required|numeric',
            'date' => 'required|date',
            'duree' => 'required',
            'medecin' => 'required',
            'etablissement_medical' => 'required',
            'numero_chambre' => 'nullable|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Modification : l'image n'est plus obligatoire lors de la mise à jour
        ]);

        // Recherchez l'opération par son ID
        $operation = Operation::findOrFail($id);

        // Mettez à jour les champs de l'opération avec les données fournies
        $operation->nom = $request->input('nom');
        $operation->ville = $request->input('ville');
        $operation->tarifs = $request->input('tarifs');
        $operation->date = $request->input('date');
        $operation->duree = $request->input('duree');
        $operation->medecin = $request->input('medecin');
        $operation->etablissement_medical = $request->input('etablissement_medical');
        $operation->numero_chambre = $request->input('numero_chambre');


        // Vérifiez s'il y a une nouvelle image à télécharger
        // if ($request->hasFile('image')) {
        //     // Supprimez l'ancienne image si elle existe
        //     if ($operation->image) {
        //         unlink(public_path('uploads/' . $operation->image));
        //     }
        //     // Téléchargez et enregistrez la nouvelle image
        //     $filename = time() . '_' . $request->file("image")->getClientOriginalName();
        //     $path = $request->file('image')->move(public_path('uploads'), $filename);
        //     $operation->image = $filename;
        // }

        // Sauvegardez les modifications apportées à l'opération
        $operation->save();

        // Redirigez l'utilisateur vers une page de confirmation avec un message de succès
        return redirect()->route('operationsDashMedecin.store')->with('success', 'Opération mise à jour avec succès.');
    }
}