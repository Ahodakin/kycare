
@extends('Auth.layout')

@section('title', 'Inscription Praticien')

@section('content')

@include('Auth.Nav')
<style>
    body {
        background-image: url('Frontend/images/slider/slider-bg-1.jpg');
        background-position: center;
        height: 100vh;
        margin: 0;
        background-repeat: no-repeat;

        /* Supprimer les marges par défaut du corps */
    }

    .section-container {
        display: flex;
        justify-content: center;
        /* Centrer horizontalement */

        /* Hauteur de la fenêtre visible */
    }

    .left-side,
    .right-side {
        width: 50%;
        /* Chaque côté occupe 50% de la largeur */
        color: white;
        opacity: 0.9;
        /* Diminuer l'opacité */
        text-align: center;
    }

    .welcome-section {
        padding-top: 100px;
        background-color: #48bdc5;
        color: white;
        opacity: 0.9;
        /* Diminuer l'opacité */

    }


    /* Style du bouton de connexion */
    .btn-connexion {
        background-color: white;
        color: #48bdc5;
        opacity: 1;
    }

    .btn-connexion:hover {
        background-color: #48bdc5;
        color: white;
        opacity: 1;
    }

    .no-border {
        border: none;
    }

    .my-custom-color {
        background-color: #48bdc5;
        color: white;
    }

    .card-title {
        color: black;
    }

</style>

<div class="container mt-5">
    <div class=" row section-container">
        <!-- Section pour le texte de bienvenue et le bouton de connexion -->
        <div class="col-md-6  welcome-section">
            <div class="text-center mt-5">
                <h2>Heureux de vous revoir</h2>
                <a href="{{route('Login')}}" class="btn btn-connexion mt-3">Connexion</a>
            </div>
        </div>
        <!-- Section pour le formulaire d'inscription -->
        <div class="right-side">
            <div class="  card inscription-section no-border">
                <!-- Ajout de la classe inscription-section -->

                <div class="card-body">
                    <h2 class="card-title text-center">Inscription Praticiens</h2>

                    <form>
                        <!-- Champs du formulaire -->


                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nom" required>
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Identification unique" required>
                        </div>

                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <div class="form-group">
                            <input type="email" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirmer le password" required>
                        </div>

                        <div class="form-group">
                            <select id="specialite" name="specialite" class="form-control" required>
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
                                                

                        <div class="form-group">
                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Numéro de téléphone" required>
                        </div>

                        <button type="submit" class="btn  btn-block my-custom-color">S'inscrire</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
