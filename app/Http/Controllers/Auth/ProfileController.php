<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Specialite;
use Illuminate\Support\Facades\Validator;
class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('Auth.profile', compact('user'));
    }

    // Affiche le formulaire d'édition du profil
    public function edit()
    {   $specialites = Specialite::all();
        $user = auth()->user();
        return view('Auth.edit', compact('user', 'specialites'));
    }


    public function update(Request $request)
    {
        $user = auth()->user();
     
        // Valide les données du formulaire
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'role' => 'required|in:patient,professionnel',
            'date_naissance' => 'required|date',
            'identification_unique' => 'nullable|string|max:255|unique:users,identification_unique',
            'specialite' => 'required_if:role,professionnel|exists:specialites,id',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        // Si la validation échoue, rediriger avec les erreurs
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Met à jour les informations du profil avec les données du formulaire
        $user->update($request->all());
    
        return redirect()->route('profile')->with('success', 'Votre profil a été mis à jour avec succès!');
    }

    public function updatePicture(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            if ($user->profile_picture) {
                Storage::delete('public/' . $user->profile_picture);
            }

            // Store new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->route('doctors.index')->with('success', 'Profile picture updated successfully!');
    }
}

