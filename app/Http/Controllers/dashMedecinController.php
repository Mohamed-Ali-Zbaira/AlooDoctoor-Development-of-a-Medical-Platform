<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Rendezvous;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashMedecinController extends Controller
{
    public function getPatientsMedecin()
    {
        if (Auth::user()->role === 'medecin') {
            $rendezvous = Rendezvous::where('medecin_id', Auth::id())->get();
        } else {

            abort(403, 'Vous n\'avez pas les autorisations nécessaires pour accéder à cette ressource.');
        }
        return view('Dashboard.Patients.listesPatients', ['rendezvous' => $rendezvous]);
    }
    public function getRendezVousDuMedecin()
    {
        if (Auth::user()->role === 'medecin') {
            $rendezvous = Rendezvous::where('medecin_id', Auth::id())->get();
        } else {

            abort(403, 'Vous n\'avez pas les autorisations nécessaires pour accéder à cette ressource.');
        }
        return view('Dashboard.RendezVous.listeRendezVous', ['rendezvous' => $rendezvous]);
    }
    public function showProfileMedecin()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        // Pass the authenticated user's information to the view
        return view('Dashboard.Profile.ProfilePage', ['user' => $user]);
    }



    public function showUpdateProfileForm()
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Retourner la vue avec les données de l'utilisateur
        return view('Dashboard.Profile.UpdateProfilePage', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'NomClinic' => 'nullable|string|max:255',
            'numero_telephone' => 'nullable|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'speciality' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'langue_parles' => 'nullable|string|max:255',
            'temps' => 'nullable|string|max:255',
            'tarifs' => 'nullable|string|max:255',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Update user's information
        $user->full_name = $request->input('full_name');
        $user->username = $request->input('username');
        $user->NomClinic = $request->input('NomClinic');
        $user->numero_telephone = $request->input('numero_telephone');
        $user->adresse = $request->input('adresse');
        $user->speciality = $request->input('speciality');
        $user->description = $request->input('description');
        $user->langue_parles = $request->input('langue_parles');
        $user->temps = $request->input('temps');
        $user->tarifs = $request->input('tarifs');

        // Save the updated user
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('profileMedecin', ['id' => Auth::user()->id])->with('success', 'Profile updated successfully.');
    }






    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'user_name' => 'required|string|max:255',
                'user_phone' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'date' => 'required|date',
                'time' => 'required|string',
                'status' => 'required|string|in:pending,accepted,rejected,completed',
                'payment_status' => 'required|string|in:paid,unpaid',
            ]);

            $rendezvous = Rendezvous::findOrFail($id);
            $rendezvous->update($validatedData);

            return redirect()->route('rendezvous.index')->with('success', 'Rendez-vous mis à jour avec succès.');
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('rendezvous.index')->with('error', 'Rendez-vous non trouvé.');
        } catch (\Exception $exception) {
            return redirect()->route('rendezvous.index')->with('error', 'Une erreur est survenue lors de la mise à jour du rendez-vous.');
        }
    }




    public function showRendezvousList(Request $request)
    {
        $rendezvous = Rendezvous::all();

        // Vérifier si un rendez-vous a été sélectionné
        if ($request->has('selected_rdv_id')) {
            // Enregistrer l'ID du rendez-vous sélectionné dans la session
            $request->session()->put('selected_rdv_id', $request->input('selected_rdv_id'));
        }
        // Afficher la vue avec la liste des rendez-vous
        return view('Dashboard.RendezVous.listeRendezVous', [
            'rendezvous' => $rendezvous,
        ]);
    }

    //Model Add Rendez-Vous
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_phone' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|string',
            'status' => 'required|string|in:pending,accepted,rejected,completed',
            'payment_status' => 'required|string|in:paid,unpaid',
        ]);

        // Créer un nouveau rendez-vous avec les données validées
        $rendezvous = new Rendezvous();
        $rendezvous->user_name = $validatedData['user_name'];
        $rendezvous->user_phone = $validatedData['user_phone'];
        $rendezvous->location = $validatedData['location'];
        $rendezvous->date = $validatedData['date'];
        $rendezvous->time = $validatedData['time'];
        $rendezvous->status = $validatedData['status'];
        $rendezvous->payment_status = $validatedData['payment_status'];
        $rendezvous->patient_id = auth()->user()->getAuthIdentifier();

        // Enregistrer le nouveau rendez-vous dans la base de données
        $rendezvous->save();

        if ($rendezvous) {
            return back()->with('success', 'Rendez-vous ajouté avec succès.');
        }
        // Redirection vers une page de succès ou une autre page
        //return redirect()->route('rendezvous.index')->with('success', 'Rendez-vous ajouté avec succès.');
    }

    public function destroy($id)
    {
        $rendezvous = RendezVous::findOrFail($id); // Récupérer le rendez-vous à supprimer

        if ($rendezvous->delete()) {
            return redirect()->back();
        } else {
            echo "error";
        }
    }
    /*************************************  Methode Blog  ********************************************************/
    public function getPostsByAuthenticatedUserId()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        $posts = $user->posts;
        return view('Dashboard.Blog.blogPage', compact('posts'));
    }
    /*************************************  Methode Post  ********************************************************/
}
