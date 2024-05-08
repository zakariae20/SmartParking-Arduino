<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Gestion Parking</title>
</head>
<body class="body1">
    @include('layout.header')
    <div class="container">
        
        <div class="my_form">
            <br><h4>&nbsp; Liste des PLaces</h4>
            <hr>
    
            <table class="table table-stripped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Disponibilite</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($places as $place)
                        <tr>
                            <td>{{ $place->id}}</td>
                            <td>{{ $place->disponibilite}}</td>
                            
                            
                            {{-- <td>
                                <a href="{{route('etudiant_modifier',['id' => $etudiant->id])}}" class="btn btn-outline-warning me-2">Modifier</a>
                                <a href="{{route('afficher_notes',['id' => $etudiant->id])}}" class="btn btn-outline-success">Notes</a>
                                <a href="{{route('etudiant_delete',['id' => $etudiant->id])}}" class="btn btn-outline-danger">Supprimer</a>
                            </td> --}}
                        </tr>
                    @endforeach
                    
                </tbody>
    
            </table>
            
            
        </div>
        
    </div>
    <a style="position: fixed; right:0; bottom: 50px" href="{{route('utilisateur_login')}}" class="btn btn-danger me-2">Log out</a>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    @include('layout.footer')
</body>
</html>
