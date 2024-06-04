@extends('Layouts.app')

@section('title', 'Inscription Praticien')

@section('content')

@include('Layouts.header')

<section class="section contact">
  @include('Home.alert-alert-message')

    <style>
        body {
            background-color: #f5f5f5;
        }
        .hidden {
            display: none;
        }
    </style>
    <!-- container start -->
    <div class="container" style="background-color: #fff;">
        <div class="row">
            <div class="col-lg-4 col-md-5 d-flex align-items-center justify-content-center" style="background-color: #48bdc5; padding: 20px; height: 105vh;">
                <!-- Mot de bienvenue -->
                <div class="welcome-message text-center">
                    <h2>Bienvenue sur notre plateforme !</h2>
                    <p>Nous sommes ravis de vous accueillir. Prenez rendez-vous en ligne en toute simplicité pour vos consultations médicales, services de bien-être et bien plus encore.</p>
                </div>
            </div>
            
            <div class="col-lg-8 col-md-7">
                <div class="text-center mx-auto">
                    <h2 style="color: #48bdc5;">Créez votre compte KYcare</h2>
                    <p>Prenez soin de bien remplir chaque champ ci-dessous.</p><br>
                </div>

                <div class="contact-form">
                    <h3> Vos informations </h3><br>

                    <form action="{{ route('Register') }}" method="POST" class="row">
                        @csrf
                        <div class="col-lg-6">
                          <input type="text" name="nom" class="form-control main @error('nom') is-invalid @enderror" placeholder="Nom">
                        </div>

                        <div class="col-lg-6">
                          <input type="text" class="form-control main  @error('prenom') is-invalid @enderror" name="prenom" placeholder="Prénom" >
                        </div>

                        <div class="col-lg-12">
                            <input type="text" id="phone_number" name="phone_number" class="form-control main @error('phone_number') is-invalid @enderror" placeholder="Numéro de téléphone">
                        </div>

                        <div class="col-lg-6">
                          <select class="form-control main @error('role') is-invalid @enderror" name="role" id="subject">
                            <option value="" disabled selected>Être vous un ?</option>
                            <option value="patient">Patient</option>
                            <option value="professionnel">Professionnel</option>
                          </select>
                        </div>

                        <div class="col-lg-6">
                            <input type="date" id="date" name="date_naissance" class="form-control main @error('date_naissance') is-invalid @enderror" placeholder="Date de naissance" >
                        </div>

                        <div class="col-lg-6 hidden" id="identification_unique">
                            <input type="text" name="identification_unique" class="form-control main @error('identification_unique') is-invalid @enderror" placeholder="Identification unique">
                        </div>

                        <div class="col-lg-6 hidden" id="specialite">
                            <select name="specialite" class="form-control main @error('specialite') is-invalid @enderror">
                                <option value="" disabled selected>Choisissez votre spécialité</option>
                                @foreach($specialites as $specialite)
                                    <option value="{{ $specialite->id }}">{{ $specialite->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <h3 style="margin-left: 15px;"> Votre compte </h3> <br><br>

                        <div class="col-lg-12">
                            <input type="email" class="form-control main @error('email') is-invalid @enderror" name="email" placeholder="Email">
                        </div>

                        <div class="col-lg-12">
                          <input type="password" id="password" name="password" class="form-control main @error('password') is-invalid @enderror" placeholder="Mot de passe">
                      </div>

                      <div class="col-lg-12">
                          <input type="password" id="confirm_password" name="password_confirmation" class="form-control main @error('password_confirmation') is-invalid @enderror" placeholder="Confirmer le mot de passe">
                      </div>


                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit">Créer un compte</button>
                        </div>
                    </form><br>

                </div>
            </div>
        </div>
    </div>
      
    <script>
        // Fonction pour masquer ou afficher les champs en fonction de la sélection
        function toggleFields() {
            var subject = document.getElementById("subject");
            var specialite = document.getElementById("specialite");
            var identificationUnique = document.getElementById("identification_unique");

            if (subject.value === "patient") {
                specialite.classList.add("hidden");
                identificationUnique.classList.add("hidden");
            } else {
                specialite.classList.remove("hidden");
                identificationUnique.classList.remove("hidden");
            }
        }

        // Ajouter un événement de changement à la sélection
        document.getElementById("subject").addEventListener("change", toggleFields);

        // Appeler la fonction pour afficher les champs correctement au chargement de la page
        document.addEventListener("DOMContentLoaded", toggleFields);
    </script>
</section>
@endsection
