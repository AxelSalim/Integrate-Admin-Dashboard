<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Afficher la vue pour la connexion
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {

            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // Vérification de l'existence de l'utilisateur
            $user = User::where('email', $request->email)->first();

            if ($user) {
                // L'utilisateur existe, vérifions le mot de passe
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    // Authentification réussie, rediriger vers le tableau de bord
                    return redirect()->intended('dashboard'); // Remplacez 'dashboard' par la route de votre tableau de bord
                } else {
                    // Mot de passe incorrect
                    return back()->withErrors([
                        'password' => 'Le mot de passe est incorrect.',
                    ])->onlyInput('email');
                }
            } else {
                // L'utilisateur n'existe pas
                return back()->withErrors([
                    'email' => 'Aucun compte trouvé avec cet email.',
                ])->onlyInput('email');
            }
        } catch (\Exception $e) {
            // En cas d'erreur, rediriger avec un message d'erreur générique
            return back()->withErrors([
                'general' => 'Une erreur est survenue lors de la tentative de connexion. Veuillez réessayer plus tard.',
            ])->withInput();
        }


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentification réussie et rediriger vers le tableau de bord
            return redirect()->intended('layouts.auth');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
