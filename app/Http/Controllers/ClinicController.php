<?php

namespace App\Http\Controllers;

use App\Models\Clinique;
use App\Models\User;
use Illuminate\Http\Request;

class ClinicController extends Controller
{

    public function index()
    {
        $clinics = Clinique::paginate(6);
        return view('Home.Clinique.CliniquePage', compact('clinics'));
    }

    public function show($id)
    {
        $clinic = Clinique::find($id);

        if (!$clinic) {
            return redirect()->route('clinique.index')->with('error', 'Clinique non trouvée');
        }

        return view('Home.Clinique.CliniqueDetail', compact('clinic'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search_by');
        $clinics = Clinique::where('nom', 'LIKE', "%{$search}%")
        ->orWhere('ville', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->orWhere('numero_telephone', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->get();

        return view('Home.Clinique.CliniquePage', compact('clinics'));
    }
}