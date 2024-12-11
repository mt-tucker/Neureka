<!DOCTYPE html>

<html>
    
  <head>
    
    <meta name="viewport" content="width=device-width">
    
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles_Homepage.css">
    <link rel="icon" href="./Images/logoNeu.png" type="image/x-icon">
    <title>Neureka - Login</title>
    
  </head>


  <body class="page-transition">   
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-warning fw-bold fst-1" onclick="applyTransition()"> 
            <img src="./Images/logoNeu.png" alt="logoNeureka" style="height: 3.5rem">
            Neureka
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">  </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
<style>
body {
    background-color: #6c8ddb;
}
</style>

    <center>
  <form method="post" action="">
    <div>
    <?php
        include("./Backend/connection.php");
        include("./Backend/controller.php");
        ?>
    <div class="bg-dark p-5 rounded-5 mt-5" style="width: 27rem" >
     
    <img src="./Images/logoNeu.png"
    alt="Neureka"
    style="height: 4rem;">

    <div class="text-warning fs-1 fw-bold"> Neureka</div>
    <div class="input-group mt-5">
        <div class="input-group-text bg-warning">
            
            <img src="./Images/456212.png"
             alt="User"
            style="height: 1.2rem;">
        </div>
        <input class="form-control" type="text" placeholder="Coloca tu usuario" name="usuario"/> 
        </div>
    
     <div class="input-group mt-3">
        <div class="input-group-text bg-warning">
            <img src="./Images/25239-removebg-preview.png"
             alt="candado"
            style="height: 1.2rem;">
        </div>
        <input class="form-control" type="password" placeholder="Contraseña" name="contrasena"/>
     </div>
     <div></div>

     <div class="d-flex justify-content-around mt-2">
        <div class="d-flex align-items-center gap-2">
            <input class="form-check-input" type="checkbox">
            <div class="pt-1 text-white " style="font-size: 0.9rem">Recordarmelo</div>
        </div>
        <div class="pt-1 gap-2">
            <a href="#" class="text-decoration-none text-white fst-italic fw-bold" 
            style="font-size: 0.9rem">Olvidaste tu contraseña?</a>
        </div>
     </div>
     <div class="d-grid gap-2">
      <input type="submit" class="btn" style="background-color: rgb(250, 177, 32); border-color: rgb(220, 183, 38); color: black;" name="ingresobtn" value="ENTRAR">
     </div>
     <div class="d-flex gap-1 justify-content-center mt-2">
        <div class="text-white" style="font-size: 0.9rem">No tienes cuenta?</div>
        <a href="#" class="text-white text-decoration-none fw-bold fst-italic" style="font-size: 0.9rem">o Registrarme</a>
     </div>
     
     <div class="text-white">
        <div class="border-botton border-ligth" style="height: 0.9rem">
            <span>o</span>
        </div>
     </div>
     <div>
     </div>
      <div class="mt-3">
        <img 
        src="./Images/google-removebg-preview.png"
        alt="google"
        style="height: 1.6rem"
        />
        <div class="text-white">Continuar con google</div>
    </div>
    </div>
  </form>
 <body>
  <script src="./scripts/effects.js"></script>
 <html>