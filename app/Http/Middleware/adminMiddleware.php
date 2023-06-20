<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {   
        if ( auth()->check() && $request->user()->fk_role_id === 3) {
            // Si l'utilisateur n'est pas authentifié, redirigez-le vers la page de connexion ou effectuez toute autre action appropriée.
           return $next($request);
        }
        
        abort(403, "Accès non autorisé.");
    }
}