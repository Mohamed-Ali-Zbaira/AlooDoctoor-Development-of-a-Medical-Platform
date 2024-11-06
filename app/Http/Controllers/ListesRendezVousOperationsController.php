<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RendezvousOperation;

class ListesRendezVousOperationsController extends Controller
{
    public function getRendezvousByIdAuth()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Retrieve rendezvous where the user is either the patient or the medecin
        $rendezvous = RendezvousOperation::where('patient_id', $user->id)
            ->orWhere('medecin_id', $user->id)
            ->get();

        // Return the view with the rendezvous data
        return view('Dashboard.Operation.ListesRendezVousOperations', compact('rendezvous'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'status' => 'required|string',
            'payment_status' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // Find the rendezvous operation by id
        $rendezvous = RendezvousOperation::findOrFail($id);

        // Update the rendezvous operation with the validated data
        $rendezvous->update($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Rendezvous operation updated successfully.');
    }
}