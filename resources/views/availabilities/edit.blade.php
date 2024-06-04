
@extends('doctors.dashboard')

@section('content')

    <div class="container">
        <div class="center verticle_center full_height">
            <div class="login_section">
                <div class="logo_login">
                    <div class="center">
                        <h2 style="color: #f8f9fa">Modifier une Disponibilité</h2>
                    </div>
                </div>
                <div class="login_form">
                    <form action="{{ route('availabilities.update', $availability) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <fieldset>
                        <div class="field">
                            <label class="label_field">Heure de début</label>
                            <input type="datetime-local" id="start_time" name="start_time"  value="{{ $availability->start_time}}"  required/>
                        </div>
                        <div class="field">
                            <label class="label_field">Heure de fin</label>
                            <input type="datetime-local" id="end_time" name="end_time" value="{{ $availability->end_time }}"   required/>
                        </div><br>

                        <div class="field margin_0">
                            <button class="main_bt">Modifier</button>
                        </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection