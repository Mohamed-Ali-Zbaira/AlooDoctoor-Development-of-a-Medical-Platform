<?php
namespace App\Http\Controllers;

use App\Models\Rendezvous;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MedecinController extends Controller
{
    public function index()
{
    // Filtrer les utilisateurs par rôle de médecin et par état vérifié
    $medecins = User::where('role', 'medecin')
                    ->where('etat', 'verifier')
                    ->paginate(6); // Paginer les résultats avec 6 éléments par page

    return view('Home.Medecin.MedecinPage', compact('medecins'));
}


    public function show($id)
    {
        $medecin = User::find($id);
        return view('Home.Medecin.MedecinDetail', ['medecin' => $medecin]);
    }

    public function create()
    {
        return view('medecin.create');
    }

    public function store(Request $request)
    {
        // Vérifier si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour prendre un rendez-vous.');
        }

        // Validation des données
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'user_phone' => 'required|string',
            'location' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // En cas d'échec de validation, rediriger avec les erreurs
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Créer un nouveau rendez-vous
        $rendezvous = Rendezvous::create([
            'user_name' => $request->input('user_name'),
            'user_email' => $request->input('user_email'),
            'user_phone' => $request->input('user_phone'),
            'location' => $request->input('location'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'note' => $request->input('note'),
            'medecin_id' => $request->input('medecin_id'), // Assurez-vous que medecin_id est disponible dans le formulaire
            // Vous pouvez également ajouter d'autres champs nécessaires ici
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('rendezvous.index')->with('success', 'Rendez-vous pris avec succès!');
    }


    public function edit($id)
    {
        $medecin = User::find($id);
        return view('medecin.edit', ['medecin' => $medecin]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'string',
            'username' => 'string|unique:users,username,' . $id,
            'email' => 'email|unique:users,email,' . $id,
            'password' => 'string',
            'numero_telephone' => 'nullable|string',
            'image' => 'nullable|string',
            'adresse' => 'nullable|string',
            'langue_parles' => 'nullable|string',
            'temps' => 'nullable|string',
            'tarifs' => 'nullable|string',
            'speciality' => 'string',
            'document' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $medecin = User::find($id);

        if (!$medecin) {
            return redirect()->back()->with('error', 'Médecin non trouvé');
        }

        $medecin->update($request->all());
        return redirect()->route('medecin.index')->with('success', 'Médecin mis à jour avec succès');
    }

    public function destroy($id)
    {
        $medecin = User::find($id);

        if (!$medecin) {
            return redirect()->back()->with('error', 'Médecin non trouvé');
        }

        $medecin->delete();
        return redirect()->route('medecin.index')->with('success', 'Médecin supprimé avec succès');
    }

    public function search(Request $request)
    {
        try {
            $search_by = $request->header('search_by');
            $medecins_list = User::where('role', '=', 'medecin')
                ->when(!empty($search_by) || !is_null($search_by), function ($query) use ($search_by) {
                    $query->where('full_name', 'LIKE', '%' . $search_by . '%')
                        ->orWhere('username', 'LIKE', '%' . $search_by . '%')
                        ->orWhere('adresse', 'LIKE', '%' . $search_by . '%')
                        ->orWhere('numero_telephone', 'LIKE', '%' . $search_by . '%')
                        ->orWhere('speciality', 'LIKE', '%' . $search_by . '%');
                })
                ->get();

            return view('medecin.search', ['medecins_list' => $medecins_list]);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur s\'est produite: ' . $e->getMessage());
        }
    }
}
