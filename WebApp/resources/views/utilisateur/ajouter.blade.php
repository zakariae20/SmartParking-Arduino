<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
</head>
<body>
  @include('layout.header')
    <div class="contain2er">
        <div class="my_form">
    
            <form method="POST" action="{{route('admin_add_utilisateur')}}">
                @csrf
                <div class="input-box">
                    <span class="icon">
                      <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="nom" name="nom" required>
                    <label>Nom</label>
                  </div>
                  <div class="input-box">
                    <span class="icon">
                      <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="prenom" name="prenom" required>
                    <label>Prenom</label>
                  </div>
                  <div class="input-box">
                    <span class="icon">
                      <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" id="email" name="email" required>
                    <label>Email</label>
                  </div>
                  <div class="input-box">
                    <span class="icon">
                      <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" id="password" name="password" required>
                    <label>Password</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
    
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js">
</body>
</html>