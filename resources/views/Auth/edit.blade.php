@extends('Layouts.app')

@section('title', 'Édition du Profil')

@section('content')

@include('Layouts.header')
@include('Home.alert-alert-message')

<style>
    .profile-edit-container {
        background: #f5f5f5;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .profile-edit-container h2 {
        color: #333;
        margin-bottom: 20px;
    }

    .profile-edit-container .form-group label {
        font-weight: bold;
    }

    .profile-edit-container .btn-primary {
        background-color: #48bdc5;
        border-color: #48bdc5;
    }

    .profile-edit-container .btn-primary:hover {
        background-color: #3aa9b0;
        border-color: #3aa9b0;
    }
</style>

<div class="container profile-edit-container">
    <h2>Édition du Profil</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}">
            </div>

            <div class="form-group col-md-6">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="phone_number">Numéro de téléphone</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $user->phone_number }}">
            </div>

            <div class="form-group col-md-6">
                <label for="date_naissance">Date de naissance</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $user->date_naissance }}">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div><br>

<script>
    document.getElementById('role').addEventListener('change', function () {
        var display = this.value == 'professionnel' ? 'block' : 'none';
        document.getElementById('professional-fields').style.display = display;
    });
</script>

@endsection
