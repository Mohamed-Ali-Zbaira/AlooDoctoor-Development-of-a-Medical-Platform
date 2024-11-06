<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Rendezvous;
use App\Models\RendezvousOperation;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    /*************************************  RendezVous Medecin   ********************************************************/

    public function showProfile()
    {
        // Retrieve the authenticated user
        $user = User::find(Auth::id());

        // Retrieve rendezvous for the authenticated user
        $rendezvous = $this->getUserRendezvous();

        // Pass both the user and rendezvous data to the view
        return view('Home.Profile.ProfilePage', compact('user', 'rendezvous'));
    }

    public function getById()
    {
        // Récupérer l'identifiant de l'utilisateur connecté
        $id = Auth::id();

        // Récupérer les informations de l'utilisateur à partir de l'ID
        $user = User::select('full_name', 'username', 'adresse', 'numero_telephone', 'email', 'image', 'created_at', 'updated_at', 'localisation_link')
            ->find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }

        $rendezvous = Rendezvous::where("Patient_id", "=", $id)->get();
        $rendezvousOperations = $this->getUserRendezvousOperation();
        // Charger la vue avec les données de l'utilisateur
        return view('Home.Profile.ProfilePage', compact('rendezvous', 'rendezvousOperations'))->with('user', $user);
    }

    public function update(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'full_name' => 'required|string|max:255',
            'numero_telephone' => 'required|string|max:255',

            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
        ]);

        $user = Auth::user();

        if ($request->hasFile('photo')) {
            if ($user->image) {
                // Supprimer l'ancienne image
                Storage::delete('public/uploads/' . $user->image);
            }
            $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $path = $request->photo->storeAs('uploads', $filename, 'public');
            $user->image = $filename;
        }

        $user->full_name = $request->input('full_name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->numero_telephone = $request->input('numero_telephone');
        $user->adresse = $request->input('adresse');

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }




    public function getUserRendezvous()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve rendezvous associated with the authenticated user
        $rendezvous = Rendezvous::where('Patient_id', $user->id)->get();

        // Return the rendezvous data
        return $rendezvous;
    }

    public function printAppointmentDetails($id)
    {
        $rendezvous = Rendezvous::findOrFail($id);
        return view('Home.Profile.FeuillerImprimer', compact('rendezvous'));
    }





    /************************************* RendezVous Operation   ********************************************************/



    public function getUserRendezvousOperation()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve rendezvous operations associated with the authenticated user
        $rendezvousOperations = RendezvousOperation::where('patient_id', $user->id)->get();

        // Return the rendezvous operations data
        return $rendezvousOperations;
    }
    public function showProfileOperation()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Retrieve rendezvous operations associated with the authenticated user
        $rendezvousOperations = $this->getUserRendezvousOperation();

        // Pass both the user and rendezvous operations data to the view
        return view('', compact('user', 'rendezvousOperations'));
    }


    public function getByIdOperation()
    {
        // Retrieve the ID of the logged-in user
        $id = Auth::id();

        // Retrieve user information from the ID
        $user = User::select('full_name', 'username', 'email', 'image', 'created_at', 'updated_at', 'localisation_link')
            ->find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }

        $rendezvousOperations = RendezvousOperation::where("patient_id", "=", $id)->get();

        return view('Home.Profile.ProfilePage', compact('rendezvousOperations', 'rendezvousOperations'))->with('user', $user);
    }

    public function printAppointmentDetailsOperation($id)
    {
        $rendezvousOperation = RendezvousOperation::findOrFail($id);
        return view('Home.Profile.FeuillerOperationImprimer', compact('rendezvousOperation'));
    }
}