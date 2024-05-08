<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
  <title>Welcome!</title>
</head>
<body>

  <header class="header">
    <h2 class="logo" >PARKING</h2>
    <nav class="navbar">
        <a href="{{route('utilisateur_login')}}">Home</a>   
        <a href="{{route('utilisateur_aboutus')}}">About</a>   
        <a href="#">Services</a>     
    </nav>
</header>
<div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo2">
                <ion-icon name="logo-firebase"></ion-icon>
                Arduino Park</h2>
                <div class="text-sci">
                    <h2>Welcome! <br> <span>To our Website.</span></h2>
                      <p>Ce site a pour objective de visualiser le statut actuel du parking</p>
                    <div class="social-icons">
                        <a href="#"><i class='bx bxl-linkedin' ></i></a>
                        <a href="#"><i class='bx bxl-facebook' ></i></a>
                        <a href="#"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div>
        </div>
        
        <div class="logreg-box">
            <div class="form-box login">
                <form method="POST" action="{{route('utilisateur_login')}}">
                  @csrf
                    <h2>Login</h2>
                  <div class="input-box">
                    <span class="icon">
                      <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" id="email" name="email" required >
                    <label>Email</label>
                  </div>
                  <div class="input-box">
                    <span class="icon">
                      <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" id="password" name="password" required>
                    <label>Password</label>
                  </div>
                  <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    
                  </div>
                    <button type="submit" class="btn">Login</button>
                  <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link"> Register </a></p>
                  </div>
                </form>
              </div>
              <div class="form-box register">
                <form method="POST" action="{{route('utilisateur_add')}}">
                  @csrf
                  <h2>Signup</h2>
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
                  <div class="remember-forgot">
                    <label><input type="checkbox" required>I agree to the terms & conditions</label>
                  </div>
                    <button type="submit" class="btn">Signup</button>
                  <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link"> Login </a></p>
                  </div>
                </form>
              </div>
        </div>
    </div>
    <script>
      const logregBox = document.querySelector('.logreg-box');
      const loginLink = document.querySelector('.login-link');
      const registerLink = document.querySelector('.register-link');
    registerLink.addEventListener('click', ()=> {
        logregBox.classList.add('active');
    });
    loginLink.addEventListener('click', ()=> {
        logregBox.classList.remove('active');
    });
    </script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js">
    </script>
</body>
</html>