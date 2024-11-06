<?php

namespace App\Http\Controllers;

use App\Models\RendezvousOperation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RendezvousOperationMedecinController extends Controller
{
    /**
     * Display a listing of the authenticated user's rendezvous operations.
     */
    public function index()
    {
        // Get the authenticated user's ID
        $medecinId = Auth::id();

        // Fetch the RendezvousOperation records for the authenticated medecin
        $rendezvousOperations = RendezvousOperation::where('medecin_id', $medecinId)->get();


        // Return the view with the data
        return view('Dashboard.Operation.Rendez-VousOperations', compact('rendezvousOperations'));
    }
    public function destroy($id)
    {
        $rendezvousOperation = RendezvousOperation::findOrFail($id);
        $rendezvousOperation->delete();

        return redirect()->route('medecin.rendezvous_operations.index')->with('success', 'Appointment deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'note' => 'nullable|string',
            'status' => 'required|string|in:pending,accepted,rejected,completed',
            'payment_status' => 'required|string|in:paid,unpaid',
        ]);

        $data = $request->only(['date', 'note', 'status', 'payment_status']);

        $rendezvousOperation = RendezvousOperation::findOrFail($id);
        $rendezvousOperation->update($data);

        return redirect()->route('medecin.rendezvous_operations.index')->with('success', 'Appointment updated successfully.');
    }
}
