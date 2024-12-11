<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Neureka - Inicio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles_Homepage.css">
  <!-- Favicon -->
  <link rel="icon" href="./Images/logoNeu.png" type="image/x-icon">
</head>

<body class="page-transition">
  <header class="header">
    <a href="index.html" class="logo">Neureka</a>
    <div class="button-container">
      <button class="btn-signup" onclick="window.location.href='#'">Registrarse</button>
      <button class="btn-login" onclick="applyTransition()">Iniciar Sesión</button>
    </div>
  </header>

  <div class="main-content">
    <h1 class="main-title">Bienvenido a Neureka</h1>
    <p class="sub-title">¡Entendiendo tu mundo, construimos el futuro juntos!</p>
    <div class="separator">
      <span class="line"></span>
      <span class="separator-text">Genuine School</span>
      <span class="line"></span>
    </div>
    <button class="btn-main" onclick="applyTransition()">Inicia ahora</button>
  </div>

  <script>
    function applyTransition() {
      document.body.classList.add('fade-out');
      setTimeout(() => {
        window.location.href = 'login.php';
      }, 500);
    }
  </script>
</body>
</html>
