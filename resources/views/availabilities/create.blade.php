{{-- @extends('layouts.app')

@section('title', 'Gestion des Disponibilités') --}}
{{-- 
@section('content')

@include('layouts.header')

<div class="container">
    @include('Home.alert-alert-message')
    
    <!-- Calendrier FullCalendar -->
    <div id="calendar"></div>
</div>
<style>
    .availability-form {
        max-width: 600px;
        margin: 50px auto;
        padding: 30px;
        background: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .form-group label {
        font-weight: bold;
    }
    .btn-primary {
        background-color: #48bdc5;
        border: none;
    }
    .btn-primary:hover {
        background-color: #37a2ac;
    }
</style>

<div class="container">
<div class="availability-form">
    <h2 class="text-center mb-4">Ajouter une Disponibilité</h2>
    <form action="{{ route('availability.store') }}" method="POST">
        @csrf
        {{-- <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div> 
        <div class="form-group">
            <label for="start_time">Heure de début</label>
            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
        </div>

        <div class="form-group">
            <label for="end_time">Heure de fin</label>
            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Enregistrer</button>
    </form>
</div>
</div>

@endsection --}}
@extends('doctors.dashboard')

@section('content')

    <div class="container">
        <div class="center verticle_center full_height">
            <div class="login_section">
                <div class="logo_login">
                    <div class="center">
                        <h2 style="color: #f8f9fa">Ajouter une dispoblilite</h2>
                    </div>
                </div>
                <div class="login_form">
                    <form action="{{ route('availability.store') }}" method="POST">
                        @csrf
                        <fieldset>
                        <div class="field">
                            <label class="label_field">Heure de début</label>
                            <input type="datetime-local" id="start_time" name="start_time"  required/>
                        </div>
                        <div class="field">
                            <label class="label_field">Heure de fin</label>
                            <input type="datetime-local" id="end_time" name="end_time" required/>
                        </div><br>

                        <div class="field margin_0">
                            <button class="main_bt">Enregistrer</button>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection