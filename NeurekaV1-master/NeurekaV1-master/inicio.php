<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Neureka </title>
    <link rel="icon" type="image/png" href="./Images/logoNeu.png" />
    <!--Aqui agregue esta linea meta para que sea responsivo de alguna u otra forma-->
    <!--El viewport es el tamano de la pantalla en si, y se toma el tamano del ancho-->
    <meta name="viewport" content="width=device-width, intitial-scale=1.0" />
    <link rel="stylesheet" href="./css/Styles_inicia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--Aqui reorganice la distribucion de los elementos. Primero que todo,-->
    <!--hay que hacer que todos los elementos esten dentro de un contenedor-->
    <!--padre, y ese contenedor se va a distribuir en filas y columnas-->
    <!--El contenedor fluid permite que se distribuya en todo el ancho-->
    <div class="container-fluid">
        <!--El header es la cabecera de la app, entonces la barra de navegacion va ahi-->
        <header>
            <!--La primera fila va a contener los elementos de la barra superior-->
            <div class="row">
                <!--Aqui solamente va a haber una columna que se va a distribuir-->
                <!--por todo el ancho (por eso es col-12)-->
                <div class="col-12" style="background-color:black ;">
                    <!--Aqui coloque lo que ya tenias. Esto asegura que el tamano del-->
                    <!--menu se mantenga sin importar el ancho de la pantalla-->
                    <div class="Cubo">
                        <img class="Cuborubric" title="Logo Neureka" alt="Neureka" src="./Images/logoNeu.png">
                    </div>
                    <div class="Cubo">
                        <h5 class="navbar-brand text-warning fw-bold fst-1" style="font-size: xx-large;">Neureka</h5>
                    </div>
                </div>
            </div>
        </header>
        <!--Despues del header, va el contenido principal que es la estrella y el pie-->
        <!--de pagina-->
        <main>
            <!--Se crea la segunda fila, y aqui, para que quede centrada, se crean tres-->
            <!--columnas: una que se alinea a la izquierda, otra a la derecha-->
            <!--(esas estan vacias, porque solo sirven para alinear) y en el centro va la-->
            <!--estrella-->
            <div class="row">
                <div class="col align-self-start">
                    
                </div>
                <!--esta es la columna que va en el centro. Esta columna es el contenedor-->
                <!--padre que contiene a la estrella y al texto. Tiene un id que nos va-->
                <!--a servir en CSS para alinear la estrella y el texto juntos-->
                <div id="parent" class="col align-self-center">
                    <!--Para que la imagen sea responsiva, le coloque la clase img-fluid-->
                    <!--asi se va a adaptar al ancho y al alto de la pagina.-->
                    <img src="./Images/Img/image.png" class="img-fluid" alt="star">
                    <!--Aqui vamos a usar otro id que va a estar ligado al elemento padre en-->
                    <!--CSS. Ve al archivo en CSS para mas detalles.-->
                    <div id="star">
                        <a href="menuretos.php" class="h1" style="text-decoration: none;">Inicia</a>    
                    </div>
                </div>
                <div class="col align-self-end">

                </div>
            </div>
        </main>
        <!--El pie de pagina del sitio-->
        <footer class='col-11'>
        <!--se crea la ultima fila para colocar los links de Profe y admin-->
            <div class="row align-items-center">
                <div class="col-10">

                </div>
                <div class="col-2"  style="background-color: azure">
                    <div class="below_menu">
                        <a href="#">Profesor</a>
                    </div>
                    <div class="below_menu">
                        <a href="#">Administrador</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>