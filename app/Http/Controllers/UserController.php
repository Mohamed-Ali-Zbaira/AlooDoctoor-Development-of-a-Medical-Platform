<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Affiche la liste de tous les utilisateurs.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
{
    // Assuming you have a 'role' column in the 'users' table
    $users = User::where('role', 'user')->get();

    return response()->json(['users' => $users], 200);
}


    /**
     * Affiche les détails d'un utilisateur spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json(['user' => $user], 200);
    }

    /**
     * Crée un nouvel utilisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
        ]);

        $user = User::create([
            'full_name' => $request->input('full_name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

        return response()->json(['user' => $user], 201);
    }

    /**
     * Met à jour les informations d'un utilisateur spécifique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'full_name' => 'required|string',
            'username' => 'required|string|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'sometimes|required|string|min:6',
            'role' => 'required|string',
        ], [
            'username.unique' => 'Le nom d\'utilisateur est déjà utilisé.',
            'email.unique' => 'L\'adresse e-mail est déjà utilisée.',
        ]);

        $user->update([
            'full_name' => $request->input('full_name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? Hash::make($request->input('password')) : $user->password,
            'role' => $request->input('role'),
        ]);

        return response()->json(['user' => $user], 200);
    }


    /**
     * Supprime un utilisateur spécifique.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
