<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class MedecinMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifier si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect('/login'); // Rediriger vers la page de connexion
        }

        // Vérifier si l'utilisateur a le rôle de médecin
        if (Auth::user()->role !== 'medecin') {
            return redirect('/');
        }

        return $next($request);
    }
}
