<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Neureka - Menu de retos </title>
    <link rel="icon" type="image/png" href="./Images/logoNeu.png" />
    <!--Aqui agregue esta linea meta para que sea responsivo de alguna u otra forma-->
    <!--El viewport es el tamano de la pantalla en si, y se toma el tamano del ancho-->
    <meta name="viewport" content="width=device-width, intitial-scale=1.0" />
    <link rel="stylesheet" href="./css/Styles_retos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:#2252c0">
    <div class="container-fluid">
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
        <main>
            <div class="col-12">
                <h1 class="h1" style="color: white; font-weight:bolder;">Inicia tu viaje con Neureka, selecciona el reto que deseas hacer</h1>
            </div>
            <div class="col-12">
                <?php
                    include "./Backend/connection.php";
                    include "./Backend/controllerretos.php";
                ?>
                <form method="post" action="">
                <select class="form-select" aria-label="Default select example" name="retos">
                    <option selected>Elige el reto que deseas jugar</option>
                    <?php
                        include "./Backend/connection.php";
                        $sql=$connection->query("SELECT id, nombre FROM retos");
                        if($sql->num_rows>0){
                            while($fila=$sql->fetch_assoc()){
                                ?>
                                <option value="<?php echo $fila["id"]; ?>"><?php echo $fila["nombre"]; ?></option>
                           <?php }
                            
                        }
                        else{
                            echo '<div class="alert alert-danger">No hay retos para mostrar</div>';
                        }?>
                  </select>
                  <div class="col-12">
                        <br/>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-12">
                        <input type="submit" class="btn" style="background-color: rgb(250, 177, 32); border-color: rgb(220, 183, 38); color: black; width: 50vh;" name="jugar" value="Juega!">
                    </div>
                    </form>
            </div>
        </main>
    </div>
</body>
</html>