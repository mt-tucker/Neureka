<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <!-- Favicon -->
    <link rel="icon" href="./Images/logoNeu.png" type="image/x-icon">
    <title>Neureka - Configuración</title>
    <link rel="stylesheet" href="./css/styles_config.css">
 
</head>
<body>
    <header>
      <div class="navbar">
          <div class="cubo">
            <img class="cuborubic" title="Logo Neureka" alt="Neureka" src="./Images/logoNeu.png">
          </div>
          <div class="cubo">
            <h1>Neureka</h1>
          </div>    
        </div>
    </header>
 
   
 
    <div class="container" id="inicio">
        <h2>!Haz los ajustes a tu manera!</h2>
        <img alt="" src="./Images/StockCake-Innovative_Robot_.png" style="width: 20vw; height=auto;"/>
        <button onclick="mostrarConfiguracion()">Ir a Configuración</button>
    </div>
 
    <div class="container" id="configuracion" style="display:none;">
        <h2>Página de Configuración</h2>
       
        <div>
            <label for="volumen">Volumen:</label>
            <input type="range" id="volumen" name="volumen" class="slider" min="0" max="100" value="50">
        </div>
 
        <div>
            <label for="vibracion">Vibración:</label>
            <input type="checkbox" id="vibracion" name="vibracion">
        </div>
 
        <div>
            <label for="modoOscuro">Modo Claro/Oscuro:</label>
            <input type="checkbox" id="modoOscuro" name="modoOscuro" onclick="toggleModoOscuro()">
        </div>
 
        <button onclick="mostrarInicio()">Regresar a Inicio</button>
    </div>
 
    <script>
        function mostrarInicio() {
            document.getElementById('inicio').style.display = 'block';
            document.getElementById('configuracion').style.display = 'none';
        }
 
        function mostrarConfiguracion() {
            document.getElementById('inicio').style.display = 'none';
            document.getElementById('configuracion').style.display = 'block';
        }
 
 
        function toggleModoOscuro() {
            var checkbox = document.getElementById('modoOscuro');
            if (checkbox.checked) {
                document.body.style.backgroundColor = '#333';
                document.body.style.color = 'white';
            } else {
                document.body.style.backgroundColor = '#5877ca';
                document.body.style.color = 'yellow';
            }
        }
    </script>
</body>
</html>