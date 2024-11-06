<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchMedecinController extends Controller
{
    /**
     * Handle the search request.
     */
    public function search(Request $request)
    {
        $searchBy = $request->input('search_by');
        $specialty = $request->input('Specialty');
        $governorate = $request->input('governorate');

        $query = User::where('role', User::ROLE_MEDECIN);

        if ($searchBy) {
            $query->where(function ($q) use ($searchBy) {
                $q->where('full_name', 'like', '%' . $searchBy . '%')
                    ->orWhere('username', 'like', '%' . $searchBy . '%')
                    ->orWhere('email', 'like', '%' . $searchBy . '%');
            });
        }

        if ($specialty) {
            $query->where('speciality', 'like', '%' . $specialty . '%');
        }

        if ($governorate) {
            $query->where('adresse', 'like', '%' . $governorate . '%');
        }

        $medecins = $query->paginate(9);

        return view('Home.Medecin.MedecinPage', compact('medecins'));
    }
}