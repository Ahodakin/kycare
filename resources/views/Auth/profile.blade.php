@extends('layouts.app')

@section('title', 'Profil de l\'utilisateur')

@section('content')

@include('layouts.header')
@include('Home.alert-alert-message')
<style>
    /* Container */
    .profile {
        background: #f5f5f5;
        padding: 20px 0;
    }

    .profile .container {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Sidebar */
    .profile-sidebar {
        padding: 20px;
        background: #48bdc5;
        color: #fff;
        border-radius: 8px;
        position: -webkit-sticky;
        position: sticky;
        top: 20px;
    }

    .profile-userpic {
        width: 250px; /* Largeur fixe */
        height: 250px; /* Hauteur fixe */
        overflow: hidden; /* Cacher les parties débordantes de l'image */
        margin: 0 auto; /* Centrer l'image */
        border-radius: 50%; /* Rendre l'image ronde */
    }

    .profile-userpic img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Couper et ajuster l'image pour remplir le conteneur */
        border-radius: 50%; /* Assurer que l'image reste ronde */
    }

    .profile-usertitle {
        text-align: center;
        margin-top: 20px;
    }

    .profile-usertitle-name {
        font-size: 18px;
        font-weight: 600;
    }

    .profile-usertitle-job {
        font-size: 14px;
        font-weight: 300;
        color: #fff;
        margin-top: 5px;
    }

    .profile-userbuttons {
        text-align: center;
        margin-top: 20px;
    }

    .profile-userbuttons .btn {
        margin-right: 10px;
    }

    /* Content */
    .profile-content {
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .profile-content h2,
    .profile-content h3 {
        color: #48bdc5;
    }

    .profile-content p {
        font-size: 16px;
        margin-bottom: 10px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .profile-sidebar {
            margin-bottom: 20px;
        }
    }
</style>
<section class="section profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="profile-sidebar">
                    <div class="profile-userpic">
                        <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://via.placeholder.com/150' }}" class="img-responsive" alt="User Pic">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{ $user->nom }} {{ $user->prenom }}
                        </div>
                        <div class="profile-usertitle-job">
                            {{ ucfirst($user->role) }}
                        </div>
                    </div>
                    <form action="{{ route('profile.update_picture') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <input type="file" class="@error('profile_picture') is-invalid @enderror" id="profile_picture" name="profile_picture">
                            @error('profile_picture')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                        <a href="{{ route('logout') }}" class="btn btn-danger btn-sm">Logout</a>
                    </form>
                 
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="profile-content">
                    <h2>Profil de l'utilisateur</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nom: </strong>{{ $user->nom }}</p>
                            <p><strong>Prénom: </strong>{{ $user->prenom }}</p>
                            <p><strong>Email: </strong>{{ $user->email }}</p>
                            <p><strong>Numéro de téléphone: </strong>{{ $user->phone_number }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Rôle: </strong>{{ ucfirst($user->role) }}</p>
                            <p><strong>Date de naissance: </strong>{{ $user->date_naissance }}</p>
                            @if($user->role === 'professional')
                                <p><strong>Identification unique: </strong>{{ $user->identification_unique }}</p>
                                <p><strong>Spécialité: </strong>{{ $user->specialite->name }}</p>
                            @endif
                        </div>
                        <div class="profile-userbuttons">
                            <a href="{{route('profile.edit')}}" class="btn btn-primary btn-sm">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
