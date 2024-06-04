<!-- Section pour afficher les messages de succès -->
@if (session('success'))
    <div class="alert alert-success">
        <li>{{ session('success') }}</li>
    </div>
@endif
         
<!-- Section pour afficher les erreurs de validation -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif