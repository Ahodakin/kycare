@extends('Layouts.app')

@section('title', 'Inscription Praticien')

@section('content')

@include('Layouts.header')

<section class="section contact">
    <style>
          body {
            background-color: #f5f5f5;

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
            <!-- contact form start -->
            <h3> Vos informations </h3><br>
            <form action="!#" class="row">
                
              <!-- name -->
              {{-- <h5>Vos informations</h5> --}}
              
              <div class="col-lg-6">
                <input type="text" name="name" class="form-control main" placeholder="Nom" required>
              </div>
              <!-- email -->
              <div class="col-lg-6">
                <input type="text" class="form-control main" placeholder="Prénom" required>
              </div>
              <!-- phone -->
       
              <div class="col-lg-12">
                <input type="text" id="phone_number" name="phone_number" class="form-control main" placeholder="Numéro de téléphone" required>
              </div>

              <div class="col-lg-6">
                <select class="form-control main" name="subject" id="subject">
                    <option value="" disabled selected>Être vous un ?</option>
                    <option>Patient</option>
                    <option>Professionnel</option>
                </select>
              </div>

              <div class="col-lg-6">
                <input type="date" id="date" name="date" class="form-control main" placeholder="Date de naissance" required>
              </div>

              <div class="col-lg-6" id="identification_unique">
                <input type="text" name="identification_unique" class="form-control main" placeholder="Identification unique" required>
              </div>

              <div class="col-lg-6" id="specialite">
                <select name="specialite" class="form-control main" required>
                    <option value="" disabled selected>Choisissez votre spécialité</option>
                    <option value="Cardiologie">Cardiologie</option>
                    <option value="Dermatologie">Dermatologie</option>
                    <option value="Endocrinologie">Endocrinologie</option>
                    <option value="Gastro-entérologie">Gastro-entérologie</option>
                    <option value="Gynécologie">Gynécologie</option>
                    <option value="Hématologie">Hématologie</option>
                    <option value="Néphrologie">Néphrologie</option>
                    <option value="Neurologie">Neurologie</option>
                    <option value="Ophtalmologie">Ophtalmologie</option>
                    <option value="Oto-rhino-laryngologie (ORL)">Oto-rhino-laryngologie (ORL)</option>
                    <option value="Pédiatrie">Pédiatrie</option>
                    <option value="Psychiatrie">Psychiatrie</option>
                    <option value="Radiologie">Radiologie</option>
                    <option value="Rhumatologie">Rhumatologie</option>
                    <option value="Urologie">Urologie</option>
                    <!-- Ajoutez d'autres spécialités au besoin -->
                </select>
              </div>

                <h3 style="margin-left: 15px;"> Votre compte </h3> <br>

              <br><div class="col-lg-12">
                <input type="email" class="form-control main" placeholder="Email" required>
              </div>

              <div class="col-lg-12">
                <input type="password" id="password" name="password" class="form-control main" placeholder="Mot de passe" required>    
              </div>

              <div class="col-lg-12">
                <input type="password" id="confirm_password" name="confirm_password" class="form-control main" placeholder="Confirmer le password" required>
              </div>
             

              <!-- submit button -->
              <div class="col-md-12 text-right">
                <button class="btn btn-style-one" type="submit">Créer un compte</button>
              </div>
            </form><br>
            <!-- contact form end -->
          </div>
        </div>
      </div>
    </div>
    <!-- container end -->
    <script>
        // Fonction pour masquer ou afficher les champs en fonction de la sélection
        function toggleFields() {
            var subject = document.getElementById("subject");
            var specialite = document.getElementById("specialite");
            var identificationUnique = document.getElementById("identification_unique");
    
            if (subject.value === "Patient") {
                specialite.style.display = "none";
                identificationUnique.style.display = "none";
            } else {
                specialite.style.display = "block";
                identificationUnique.style.display = "block";
            }
        }
    
        // Ajouter un événement de changement à la sélection
        document.getElementById("subject").addEventListener("change", toggleFields);
    
        // Appeler la fonction pour afficher les champs correctement au chargement de la page
        toggleFields();
    </script>
</section>
@endsection
