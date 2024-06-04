@extends('doctors.dashboard')

@section('content')
@include('Home.alert-alert-message')
<div class="row">
 <div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head">
          <div class="heading1 margin_0">
             <h2>Mes disponibilités</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table">
                <thead>
                   <tr>
                    <th>Date</th>
                    <th>Heure de début</th>
                    <th>Heure de fin</th>
                    <th>Actions</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                    @foreach($availabilities as $availability)
                    <tr>
                        <td>{{ $availability->created_at}}</td>
                        <td>{{ $availability->start_time}}</td>
                        <td>{{ $availability->end_time}}</td>
                        <td>
                            <a href="{{ route('availabilities.edit', $availability) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('availabilities.destroy', $availability) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"     onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
</div>
@endsection
