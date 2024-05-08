@extends('Layouts.app')

@section('title', 'Choix du Profil')

@section('content')
@include('Auth.Nav')
<br>
<style>
    .section {
        text-align: center;
        padding: 100px;
        background-color: #fff;
        opacity: 0.9;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        height: 300px;
        transition: all 0.3s ease;
    }

    .section h2 {
        color: black;
    }

    .container h2 {
        color: black;
    }

    .section:hover {
        transform: scale(1.05);
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .btn-section {
        margin-top: 20px;
        background-color: #48bdc5;
    }

</style>

<div class="container">
    <h2 class="text-center mb-3">Sélectionner votre statut</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="section">
                <h2>Je suis patient</h2>
                <a href="/RegisterPatient" class="btn  btn-block btn-section">Patient</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section">
                <h2>Je suis praticien</h2>
                <a href="/RegisterPraticien" class="btn  btn-block btn-section">Praticien</a>
            </div>
        </div>
    </div>
</div><br><br>

@endsection
