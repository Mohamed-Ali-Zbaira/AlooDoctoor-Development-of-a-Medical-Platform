<?php

namespace App\Http\Controllers;

use App\Models\Clinique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CliniqueAdminController extends Controller
{
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Retrieve the cliniques associated with the authenticated user
        $cliniques = Clinique::where('user_id', $userId)->get();

        // Return a view with the cliniques data (create a view named 'cliniques.index')
        return view('DashboardSuperAdmin.Cliniques.CliniquesPage', compact('cliniques'));
    }
    public function destroy(Clinique $clinique)
    {
        // Ensure the authenticated user is the owner of the clinique
        if (Auth::id() !== $clinique->user_id) {
            return redirect()->route('cliniques.index')->with('error', 'You are not authorized to delete this clinic.');
        }

        // Delete the clinique
        $clinique->delete();

        // Redirect to the clinics index with a success message
        return redirect()->route('cliniques.index')->with('success', 'Clinic deleted successfully.');
    }

    public function edit(Clinique $clinique)
    {
        // Ensure the authenticated user is the owner of the clinique
        if (Auth::id() !== $clinique->user_id) {
            return redirect()->route('cliniques.index')->with('error', 'You are not authorized to edit this clinic.');
        }

        // Return the edit view with the clinique data
        return view('DashboardSuperAdmin.Cliniques.EditCliniquePage', compact('clinique'));
    }

    public function update(Request $request, Clinique $clinique)
    {
        // Ensure the authenticated user is the owner of the clinique
        if (Auth::id() !== $clinique->user_id) {
            return redirect()->route('cliniques.index')->with('error', 'You are not authorized to update this clinic.');
        }

        // Validate the request data
        $request->validate([
            'nom' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero_telephone' => 'required|string|max:20',
            'localisation_link' => 'nullable|string|max:255',
            'image' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Update the clinique with the validated data
        $clinique->update($request->all());

        // Redirect to the clinics index with a success message
        return redirect()->route('cliniques.index')->with('success', 'Clinic updated successfully.');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nom' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero_telephone' => 'required|string|max:20',
            'localisation_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048', // Ensure the image is a valid file and not too large
            'description' => 'nullable|string',
        ]);

        // Handle file upload if an image is provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create the new clinique
        Clinique::create([
            'nom' => $request->nom,
            'user_id' => Auth::id(), // Associate the clinic with the authenticated user
            'ville' => $request->ville,
            'email' => $request->email,
            'numero_telephone' => $request->numero_telephone,
            'localisation_link' => $request->localisation_link,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        // Redirect to the clinics index with a success message
        return redirect()->route('cliniques.index')->with('success', 'Clinic created successfully.');
    }
}
