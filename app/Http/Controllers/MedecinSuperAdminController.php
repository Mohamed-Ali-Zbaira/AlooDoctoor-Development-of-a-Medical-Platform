<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Storage;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedecinSuperAdminController extends Controller
{
    public function index()
    {
        // Retrieve all users with the role of "medecin"
        $medecins = User::where('role', User::ROLE_MEDECIN)->get();

        // Return the view with the list of doctor users
        return view('DashboardSuperAdmin.Medecin.ListesMedecin', compact('medecins'));
    }



    public function show($id)
    {
        // Retrieve the user by their ID
        $medecin = User::findOrFail($id);

        // Retrieve the document associated with the user
        $document = Document::where('user_id', $id)->first();

        // Return the view with the details of the specified user and their document
        return view('DashboardSuperAdmin.Medecin.DetailsMedecin', compact('medecin', 'document'));
    }
    public function delete($id)
    {
        // Delete the user
        User::findOrFail($id)->delete();

        return redirect()->route('medecin_super_admin.index')->with('success', 'Medecin deleted successfully.');
    }
    public function downloadDocument($id)
    {

        $document = Document::where('user_id', $id)->first();


        if ($document) {

            $storagePath = $document->path;


            if ($storagePath && Storage::exists($storagePath)) {

                $destinationPath = public_path('downloads/' . $document->filename);


                $fileContent = Storage::get($storagePath);


                file_put_contents($destinationPath, $fileContent);


                return redirect()->back()->with('success', 'Le document a été téléchargé avec succès dans le répertoire spécifié.');
            } else {

                return redirect()->back()->with('error', 'Le document demandé n\'existe pas dans le stockage ou le chemin est invalide.');
            }
        } else {

            return redirect()->back()->with('error', 'Le document demandé n\'existe pas.');
        }
    }
    public function updateEtat(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'etat' => 'required|in:inverifier,verifier',
        ]);

        // Find the medecin by its ID
        $medecin = User::findOrFail($id);

        // Update the etat of the medecin
        $medecin->update(['etat' => $validatedData['etat']]);

        // Redirect back to the index page with a success message
        return redirect()->route('medecin_super_admin.index')->with('success', 'Medecin etat updated successfully.');
    }
}