<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Web</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/bungee-outline" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/madelis-script" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/feltpen" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/brushpen-story" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/snowpe" rel="stylesheet">
                
                


    

<body>
    <nav class="navbar navbar-light" style="background: linear-gradient(#ca0000bb, rgb(228, 16, 133),rgb(255, 72, 224))">
        <div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="index.html" style="color: white;">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 1</a>

                      
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus01.php">UNO</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus02.php">De2</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus03.php">3 Tristes Tigres</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus04.php">4 Perros</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus05.php">SinKo</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/daniel05.php">paginal actual</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/daniel.php">pepito</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus06.html">pokemon</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus07.html">peliculas</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus08.html">dragon ball</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus09.html">API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
            

        </div>
    </nav>

    <div class="jumbotron">
    <h1  class="display-4 font" style="text-align: center;
        background: linear-gradient(to right, rgb(121, 0, 0), orange, red);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent; font-family: 'Feltpen', sans-serif;">4°A Programacion TM</h1><center>
        <h2 class="lead" style=" color: rgb(255, 0, 157);">Implementa Base de Datos Realacionales En Un Sistema De Información</h2>
    </center><hr class="my-4">
        <p style="text-align: center;  font-family: 'Feltpen', sans-serif;">Jesus Vargas
        </p>
        <p class="lead">

        </p>
    </div>
    </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; font-family: 'Snowpe', sans-serif;">Mostrar Datos</h1>

        <style>
            h1 {
                
                text-align: center;
                color: #000;
                margin-bottom: 20px;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(255, 168, 240);
            }
            
            tr:nth-child(even) {
                background-color: rgb(203, 92, 247);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(187, 0, 162);
                color: white;
            }


        
        </style>

        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "carpeta";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
        $sql = "SELECT * FROM `nombres`"; 
        $resultado = $conexion->query($sql);
        ?>

        <div class = "container">
            <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">Nombres de Estudiantes</h1>

            <?php if($resultado->num_rows >0):?>
                <table>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Edad</th>
                        <th>Numero favorito</th>
                    </tr>

                    <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['apellidop']; ?></td>
                        <td><?php echo $fila['apellidom']; ?></td>
                        <td><?php echo $fila['edad']; ?></td>
                        <td><?php echo $fila['numerofav']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                </table>
                <?php else: ?>
                    <p>No se encontraron los estudiantes</p>
                <?php endif; ?>
        </div>

    </div>

</body>
</html>
