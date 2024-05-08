<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Gestion Parking</title>
</head>
<body class="body1">
    <header class="header">
        <h2 class="logo" >PARKING</h2>
        <nav class="navbar">
            <a href="{{route('utilisateur_login')}}">Home</a>   
            <a href="{{route('utilisateur_aboutus')}}">About</a>   
            <a href="#">Services</a>     
        </nav>
    </header>
    <div class="container" style="position: fixed; top: 10%; left: 7%;border-radius: 20px;">
        <div class="my_form">
            <br><h4 style="color: aliceblue">&nbsp; Liste Utilisateurs<a href="{{route('utilisateur_ajouter')}}" class="btn btn-success me-2">Add User</a> </h4>
            <hr>
    
            <table class="table table-stripped" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Opertaions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($utilisateurs as $utilisateur)
                        <tr>
                            <td>{{ $utilisateur->id}}</td>
                            <td>{{ $utilisateur->nom}}</td>
                            <td>{{ $utilisateur->prenom}}</td>
                            <td>{{ $utilisateur->email}}</td>
                            <td>{{ $utilisateur->type}}</td>`
                            <td>
                                {{-- <a href="{{route('utilisateur_details')}}" class="btn btn-warning me-2">Details</a> --}}
                                <a href="{{route('utilisateur_modify',['id' => $utilisateur->id])}}" class="btn btn-primary me-2">Modify</a>
                                <a href="{{route('utilisateur_delete',['id' => $utilisateur->id])}}" class="btn btn-danger me-2">Delete</a>
                                {{-- <a href="{{route('utilisateur_login')}}" class="btn btn-danger me-2">Delete</a> --}}
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
    
            </table>
            
            
        </div>
        
    </div>
    <a style="position: fixed; right:7%; bottom: 50px" href="{{route('utilisateur_login')}}" class="btn btn-danger me-2">Log out</a>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- @include('layout.footer') --}}
</body>
</html>
