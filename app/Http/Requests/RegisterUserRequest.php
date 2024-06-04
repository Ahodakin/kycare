<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'role' => 'required|in:patient,professionnel',
            'date_naissance' => 'required|date',
            'identification_unique' => 'nullable|string|max:255|unique:users,identification_unique', // Uniquement requis et unique pour les professionnels
            'specialite' => 'required_if:role,professionnel|exists:specialites,id',
            'email' => 'required|email|max:255|unique:users,email', // Unique
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    /**
     * Obtenir les messages de validation personnalisés pour les règles définies.
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'prenom.required' => 'Le champ prénom est obligatoire.',
            'phone_number.required' => 'Le champ numéro de téléphone est obligatoire.',
            'role.required' => 'Veuillez sélectionner votre statut.',
            'role.in' => 'Le statut sélectionné est invalide.',
            'date_naissance.required' => 'Le champ date de naissance est obligatoire.',
            'date_naissance.date' => 'Le champ date de naissance doit être une date valide.',
            'identification_unique.required_if' => 'Le champ identification unique est obligatoire pour les professionnels.',
            'identification_unique.unique' => 'Cette identification unique est déjà utilisée.',
            'specialite.required_if' => 'Le champ spécialité est obligatoire pour les professionnels.',
            'specialite.exists' => 'La spécialité sélectionnée est invalide.',
            'email.required' => 'Le champ email est obligatoire.',
            'email.email' => 'Le champ email doit être une adresse email valide.',
            'email.unique' => 'L\'adresse email est déjà utilisée.',
            // 'password.required' => 'Le champ mot de passe est obligatoire.',
            // 'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            // 'password.confirmed' => 'Les mots de passe ne correspondent pas.',

            'password.required' => 'Le champ Mot de passe est obligatoire.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ];
    }
}
