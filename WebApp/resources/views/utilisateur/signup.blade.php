<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"></head>
<body class="body1">
    @include('layout.header')
    
    <div class="container">
    
        <div class="my_form">
    
            <form method="POST" action="{{route('utilisateur_add')}}">
                @csrf
                <br><h4>Sign up</h4>
                <hr>
                <div class="mb-3">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="prenom" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="mb-2">
                    <label for="prenom" class="form-label">Numero de telephone</label>
                    <input type="text" class="form-control" id="num_tel" name="num_tel">
                  </div>
                  <div class="mb-3">
                    <label for="prenom" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="user" readonly>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign up</button>
                  <hr>
            </form>
    
        </div>
    </div>
        
    @include('layout.footer')
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>