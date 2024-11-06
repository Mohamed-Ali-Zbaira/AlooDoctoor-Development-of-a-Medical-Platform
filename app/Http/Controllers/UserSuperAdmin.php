<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserSuperAdmin extends Controller
{
    public function index()
    {
        // Retrieve all users with the role of "medecin"
        $medecins = User::where('role', User::ROLE_USER)->get();

        // Return the view with the list of doctor users
        return view('DashboardSuperAdmin.User.ListesUser', compact('medecins'));
    }
}