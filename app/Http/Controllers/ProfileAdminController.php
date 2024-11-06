<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileAdminController extends Controller
{
    /**
     * Display the authenticated user's profile.
     */
    public function show()
    {
        $user = Auth::user();
        return view('DashboardSuperAdmin.Profile.Profile', compact('user'));
    }

    /**
     * Update the authenticated user's profile.
     */
    public function update(Request $request)
    {
        // Validez les données envoyées par le formulaire
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'numero_telephone' => 'required|string',
            'full_name' => 'required|string',
            'username' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mettez à jour les informations de l'utilisateur
        $user = Auth::user();
        $user->email = $request->email;
        $user->numero_telephone = $request->numero_telephone;
        $user->full_name = $request->full_name;
        $user->username = $request->username;

        // Gérez le téléchargement de l'image si fournie
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $user->image = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès!');
    }
}
