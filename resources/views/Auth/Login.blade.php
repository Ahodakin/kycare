
@extends('Auth.layout')

@section('title', 'Connexion')

@section('content')

@include('Auth.Nav')
<style>
    body {
        background-image: url('Frontend/images/slider/slider-bg-1.jpg');
        background-position: center;
        height: 100vh;
        background-repeat: no-repeat;
    }

    .login-form {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .my-custom-color {
        background-color: #48bdc5;
        color: white;
    }

    .my-custom {
        color: #48bdc5;
    }

</style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2 class="text-center mb-4" style="color:black;" >Connexion</h2>
                    <form>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Mot de passe :</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn my-custom-color btn-block">Connexion</button>
                        </div>
                        <div class="form-group text-right">
                            <a href="#" class="text-red my-custom">Mot de passe oublié</a>
                        </div>
                    </form>
                    <p class="text-center ">Vous n'avez pas de compte ? <a href="{{route('choix')}}" class="my-custom">Inscrivez-vous ici</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection




