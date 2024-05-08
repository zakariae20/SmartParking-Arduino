<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
  <title>Document</title>
</head>
<body>
  @include('layout.header')
  <div class="conta3iner">

    <div class="my_form">
      <form method="POST" action="{{route('utilisateur_update')}}">
        @csrf
          <input type="hidden"name="id" value="{{$utilisateurs->id}}">
        
        <div class="input-box">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" id="nom" name="nom" value="{{$utilisateurs->nom}}">
            <label>Nom</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" id="prenom" name="prenom" value="{{$utilisateurs->prenom}}">
            <label>Prenom</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" id="email" name="email" value="{{$utilisateurs->email}}">
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="text" id="password" name="password">
            <label>Password</label>
          </div>
          <button type="submit" class="btn btn-primary">Modify</button>
    </form>
    </div>
</div>
</body>
</html>

