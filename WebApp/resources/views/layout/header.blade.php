<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  
    .header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 25px 12.5%;
    background:transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
  }

  .logo{
    /* position: relative; */
    font-size: 1.2em;
    color: aliceblue;
    user-select: none;
    /* left:  10%; */
    
  }

  .navbar a{
    position: relative;
    font-size: 16px;
    color: aliceblue;
    text-decoration: none;
    font-weight: 700;
    margin-left: 30px; 
  }

  .navbar a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 2px;
    background: aliceblue;
    border-radius: 5px;
    opacity: 0;
    transform: translateY(10px);
    /* transform-origin: right; */
    /* transform: scaleX(0); */
    transition:  .5s;
}

.navbar a:hover::after{
      transform: translateY(0);
    opacity: 1;
  }
    </style>
    <title>Header</title>
</head>
<body>
    <header class="header">
        <!-- <span>
            <box-icon type='solid' style="background-color: aliceblue;" name='parking'></box-icon>
        </span> -->
        <h2 class="logo" >PARKING</h2>
        <nav class="navbar">
            <a href="{{route('utilisateur_login')}}">Home</a>   
            <a href="{{route('utilisateur_aboutus')}}">About</a>   
            <a href="#">Services</a>     
        </nav>
    </header>
</body>
</html>
{{-- <html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('css/header_style2.css')}}">
</head>
<body>
  <header>
  <h2 class="logo">GEST PARK</h2>
  <nav class="navigation">
    <a href="{{route('utilisateur_login')}}" class="active">Home</a>
    <a href="{{route('utilisateur_aboutus')}}" >About</a>
    <a href="#">Contact</a>
    <button class="btnLogin-popup">Login</button>
  </nav>
</header>
</body>
</html> --}}
{{-- <nav  style="position: fixed; top: 0%; width: 100%; height: 9%;" class="navbar navbar-light bg-light">
  <div  class="container-fluid">
    <b><a class="navbar-brand">GEST PARK</a></b>
    <div class="d-flex">
      <b><a style="position: fixed; top: 1.8%; left: 20%; width: 30%" href="{{route('utilisateur_login')}}" class="btn btn-primary me-2">Home</a></b>
      <b><a style="position: fixed; top: 1.8%; left: 51%; width: 30%" href="{{route('utilisateur_aboutus')}}" class="btn btn-warning me-2">About US</a></b>
      <div><img src="{{asset('css/parking_underground.jpg')}}" style="height:40px;width:40px; border-radius: 100%; position: fixed; top: 1.8%; right: 1%" x="0" y="0" height="100%" preserveAspectRatio="xMidYMid slice" width="100%">
      </div>
    </div>
  </div>
</nav> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="stylesheet" href="{{asset('css/header_style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  <header>
    <div class="navbar">
      <div class="logo"><a href="#"> GEST PARK </a></div>
      <ul class="links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <a href="#" class="action_btn"> Get Started</a>
      <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
    <div class="dropdown_menu">
      <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#" class="action_btn"> Get Started</a></li>
    </div>
  </header>

  <script>
    const toggleBtn=document.querySelector('.toggle_btn');
    const toggleBtnIcon=document.querySelector('.toggle_btn i');
    const dropDownMenu=document.querySelector('.dropdown_menu');

    toggleBtn.onclick = function (){
      dropDownMenu.classList.toggle('open'); 
      const isOpen = dropDownMenu.classList.contains('open');

      toggleBtnIcon.classList = isOpen
      ? 'fa-solid fa-xmark'
      : 'fa-solid fa-bars'
    }
  </script>
</body>
</html> --}}


{{-- <html lang="en">
<head>
  <title>Header</title>
</head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="">
      <div class="input-box">
        <span class="icon">
        <ion-icon name="mail"></ion-icon>
      </span>
      <input type="email" required>
      <label>Email</label>
    </div>
    <div class="input-box">
      <span class="icon">
        <ion-icon name="lock-closed"></ion-icon>
      </span>
      <input type="password" required>
      <label>Password</label>
    </div>
    <div class="remember-forgot">
      <label><input type="checkbox">Remember me</label>
      <a href="#">Forgot Password?</a>
    </div>
    <button type="submit">Login</button>
    <div class="register-link">
      <p>Don't have an account?<a href="#"> Register </a></p>
    </div>
    </form>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html> --}}


