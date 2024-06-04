@extends('layouts.app')

@section('title', 'Prise de Rendez-vous')

@section('content')

@include('layouts.header')
@include('Home.alert-alert-message')

<style>
    .appointment-container {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .appointment-container h2 {
        color: #333;
        margin-bottom: 20px;
    }

    .appointment-container .form-group label {
        font-weight: bold;
    }

    .appointment-container .btn-primary {
        background-color: #48bdc5;
        border-color: #48bdc5;
    }

    .appointment-container .btn-primary:hover {
        background-color: #3aa9b0;
        border-color: #3aa9b0;
    }
</style>

<div class="container appointment-container">
    <h2>Prise de Rendez-vous</h2>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="form-group">
            <label for="time">Heure</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>

        <div class="form-group">
            <label for="doctor_id">Médecin</label>
            <select class="form-control" id="doctor_id" name="doctor_id" required>
                <option value="">Sélectionner un médecin</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->nom }} {{ $doctor->prenom }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Ajoutez des notes si nécessaire..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Prendre Rendez-vous</button>
    </form>
</div>

@endsection
