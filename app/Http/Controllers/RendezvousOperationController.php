<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezvousOperation;  // Make sure to use the correct namespace for your model
use Illuminate\Support\Facades\Auth;

class RendezvousOperationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'medecin_id' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'user_phone' => 'required|string|max:255',
            'date' => 'required|date', // Ensure 'date' includes date and time if needed
            'note' => 'nullable|string',
            'operation_id' => 'required|exists:operations,id', // Ensuring the operation_id exists in the operations table
        ]);

        // Create a new rendezvous operation instance
        $rendezvous = new RendezvousOperation();
        $rendezvous->user_name = $validated['user_name'];
        $rendezvous->user_email = $validated['user_email'];
        $rendezvous->user_phone = $validated['user_phone'];
        $rendezvous->date = $validated['date'];
        $rendezvous->note = $validated['note'];

        // Associating the authenticated user as the patient
        $rendezvous->patient_id = Auth::id(); // Assuming the authenticated user is the patient
        $rendezvous->medecin_id = $validated['medecin_id'];

        // Associating the operation
        $rendezvous->operation_id = $validated['operation_id'];

        // Set default values for status and payment status
        $rendezvous->status = 'pending';
        $rendezvous->payment_status = 'unpaid';
        $rendezvous->etat = 'planned';
        $rendezvous->save();

        return redirect()->back()->with('error', 'Failed to add  the rendezvous: ');
    }
}