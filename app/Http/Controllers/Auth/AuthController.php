<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Specialite;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        $specialites = Specialite::all();
        return view('Auth.Register', compact('specialites'));
    }

    public function showLoginForm()
    {
        return view('Auth.Login');
    }

    public function store(RegisterUserRequest $request)
    {
        // Récupérer les données validées
        $data = $request->validated();
    
        // Ajoutez le champ specialite_id si le rôle est professionnel
        if ($request->role == 'professionnel') {
            $data['specialite_id'] = $request->specialite;
        }
        
        // Création de l'utilisateur
        $user = User::create($data);

        // Redirection ou autre logique après l'enregistrement de l'utilisateur
        return redirect()->route('Login')->with('success', 'Votre compte a été créé avec succès!');
    }


    // public function login(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required|string|min:8',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('profile')->with('success', 'Vous êtes connecté avec succès!');
    //     }

    //     return redirect()->back()
    //         ->withErrors(['email' => 'Les informations d\'identification fournies sont incorrectes.'])
    //         ->withInput();
    // }

    public function login(Request $request)
{
    // Validation des champs
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentification réussie
        $user = Auth::user();

        // Vérification du rôle de l'utilisateur
        if ($user->role === 'professionnel') {
            // Redirection vers la page de profil avec message
            return redirect()->route('profile')->with('info', 'Veuillez ajouter une photo avant de passer à l\'étape suivante.');
        } elseif ($user->role === 'patient') {
            // Redirection vers la page d'accueil
            return redirect()->route('index')->with('success', 'Vous êtes connecté avec succès!');
        }
    }

    // Authentification échouée
    return redirect()->back()
        ->withErrors(['email' => 'Les informations d\'identification fournies sont incorrectes.'])
        ->withInput();
}

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('Login')->with('success', 'Vous êtes déconnecté avec succès!');
    }
}
