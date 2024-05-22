@extends('Layouts.app')

@section('title', 'Connexion')

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
        <div class="col-lg-4 col-md-5 d-flex align-items-center justify-content-center" style="background-color: #48bdc5;">
            <!-- Mot de bienvenue -->
            <div class="welcome-message text-center">
                <h2>Accès à votre compte KYcare</h2>  
            </div>
        </div>
          
        <div class="col-lg-8 col-md-7">
            <div class="text-center mx-auto">
                <h4 style="color: #48bdc5;">Se connecter sur KYcare</h4>
            </div><br>
            
          <div class="contact-form">
            <!-- contact form start -->
            <h5>Vos identifiants de connexion</h5><br>
            <form action="!#" class="row">

              <br><div class="col-lg-12">
                <input type="email" class="form-control main" placeholder="Email" required>
              </div>

              <div class="col-lg-12">
                <input type="password" id="password" name="password" class="form-control main" placeholder="Mot de passe" required>    
              </div>

              <div class="col-lg-12 ">
                <button type="submit" class="form-control main btn-style-one" style="font-size: 25px;">Se connecter</button>
              </div>
            
              
            <div class="btn-contain" >
                <a href="#" style="margin-left: 20px; font-size: 15px;">Mot de passe oublié ?</a>
            </div>
            </form>
            <!-- contact form end -->
          </div>
        </div>
      </div>
    </div>

</section>
@endsection
