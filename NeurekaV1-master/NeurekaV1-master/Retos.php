<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Neureka - Retos </title>
    <link rel="icon" type="image/png" href="./Images/logoNeu.png" />
    <!--Aqui agregue esta linea meta para que sea responsivo de alguna u otra forma-->
    <!--El viewport es el tamano de la pantalla en si, y se toma el tamano del ancho-->
    <meta name="viewport" content="width=device-width, intitial-scale=1.0" />
    <link rel="stylesheet" href="./css/Styles_retos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:#2252c0">
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
        <main>
        <?php
            include "./Backend/connection.php";
            $reto_id=$_GET["id"];
            $sql=$connection->query("SELECT * FROM retos WHERE id='$reto_id'");
            if($sql->num_rows>0){
                while($fila=$sql->fetch_assoc()){
                    ?>
                  
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h1 class="challenge_name"><?php echo $fila["nombre"]?></h1>
                    </div>
                    <div class="col-2">
                        <div class="Cubo">
                            <a href="configuracion.php">
                                <img class="helmet" alt="Config" src="./Images/helmet_astronaut.png"/>
                            </a>    
                        </div>
                        <div class="Cubo">
                            <a href="configuracion.php">
                                <img class="config" alt="Config" src="./Images/cog-solid-24.png"/>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-between">
                    <div class="col-6" style="background-color: white;">
                        <p><?php echo $fila["enunciado"]?></p>
                    </div>
                    <div class="col-5" style="background-color: white;">
                        <img class="img-fluid" alt="Image" src="<?php echo $fila["imagen"]?>"/>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-12">
                        <br/>
                    </div>
                </div>
            
                <form method="get">
                <div class="row justify-content-center">
                    <div class="col-sm-5 col-md-6">
                        <input type="submit" class="btn" style="background-color: rgb(250, 177, 32); border-color: rgb(220, 183, 38); color: black; width: 50vh;" name="respuesta" value="A">
                        <input type="submit" class="btn" style="background-color: rgb(250, 177, 32); border-color: rgb(220, 183, 38); color: black; width: 50vh;" name="respuesta" value="B"> 
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-12">
                        <br/>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-5 col-md-6">
                        <input type="submit" class="btn" style="background-color: rgb(250, 177, 32); border-color: rgb(220, 183, 38); color: black; width: 50vh;" name="respuesta" value="C">
                        <input type="submit" class="btn" style="background-color: rgb(250, 177, 32); border-color: rgb(220, 183, 38); color: black; width: 50vh;" name="respuesta" value="D"> 
                    </div>
                </div>
                </form>
                <div class="row justify-content-end">
                    <div class="col-12">
                        <br/>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-6" style="background-color: white; border: 1px solid;">
                    <h1>Vuelve a intentarlo de nuevo!</h1>
                    </div>
                    <div class="col-6" style="background-color: white; border: 1px solid;">
                        <h1>Observations</h1>
                    </div>
                </div>
            </div>
            <?php
        }   }
            
        ?>
        </main>
    
</body>
</html>