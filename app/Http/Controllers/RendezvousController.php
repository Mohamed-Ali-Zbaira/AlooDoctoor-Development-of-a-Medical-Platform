<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendezvous;
use App\Models\User;

class RendezvousController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'user_phone' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'note' => 'nullable|string',
        ]);

        $rendezvous = new Rendezvous();
        $rendezvous->user_name = $validatedData['user_name'];
        $rendezvous->user_email = $validatedData['user_email'];
        $rendezvous->user_phone = $validatedData['user_phone'];
        $rendezvous->location = $validatedData['location'];
        $rendezvous->date = $validatedData['date'];
        $rendezvous->time = $validatedData['time'];
        $rendezvous->note = $validatedData['note'];

        $rendezvous->Patient_id = auth()->user()->id;

        $rendezvous->medecin_id = $request->medecin_id;

        $rendezvous->save();

        return redirect()->back()->with('success', 'Rendezvous created successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rendezvous = Rendezvous::all();


        return view('rendezvous.index', compact('rendezvous'));
    }
    public function getById($id) {
        $rendezvous = Rendezvous::find($id); // Retrieve user by ID
        return response()->json($rendezvous); // Return user data as JSON
    }
    public function delete($id)
{
    $rdv = Rendezvous::find($id);
    if (!$rdv) {
        return response()->json(['error' => 'Rendezvous not found'], 404);
    }
    $rdv->delete();
    return response()->json(['message' => 'Rendezvous deleted successfully']);
}
}
