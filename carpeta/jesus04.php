<?php
    ob_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jesus</title>  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light" style="background: black">
        <div class="container" style="font-family: 'Feltpen', sans-serif;">
            <a class="navbar-brand" href="index.html" style="color: white; ">Inicio</a>

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
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/jesus07.html">peliculas</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/jesus08.html">dragon ball</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/jesus09.html">API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; color: #1E224; ">Mostrar Datos</h1>
        <style>
           
        </style>
       <style>
      
            input[type="submit"] {
            padding:10px;
            background-color:rgb(255, 168, 240);
            border:none;
            color:#282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor:pointer;
            transition: background 0.3;
            }
            input[type="submit"]:hover {
                background-color:black;
                
            }


        </style>

        <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">Nombre del profe</h1>
        </div>

<div class="container1">


<table class="table table-bordered">
    <thead>
        <tr>
            <th>numero de control</th>
            <th>nombre</th>
            <th>apellido paterno</th>
            <th>apellido materno</th>
            <th>edad</th>
            <th>colonia</th>
            <th>especialidad</th>
            <th>genero</th>
            <th>correo</th>
            <th>telefono</th>
            <th>fecha de ingreso</th>

        </tr>
    </thead>



    <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }
      

        
$sql = "SELECT 
        a.numero_control,
        a.nombre,
        a.apellido_paterno,
        a.apellido_materno,
        e.edad,
        c.nombre_colonia,
        es.nombre_especialidad,
        g.nombre_genero,
        a.correo,
        a.telefono,
        a.fecha_ingreso
        FROM alumnos a
        JOIN edades e ON a.id_edad = e.id
        JOIN colonias c ON a.id_colonia = c.id
        JOIN especialidades es ON a.id_especialidad = es.id
        JOIN generos g ON a.id_genero = g.id";

$resultado = $conexion->query($sql);

if($resultado->num_rows > 0) {

    while($row = $resultado->fetch_assoc()){
        echo "<tr>
        <td>  {$row['numero_control']} </td>
        <td>  {$row['nombre']} </td>
        <td>  {$row['apellido_paterno']} </td>
        <td>  {$row['apellido_materno']} </td>
        <td>  {$row['edad']} </td>
        <td>  {$row['nombre_colonia']} </td>
        <td>  {$row['nombre_especialidad']} </td>
        <td>  {$row['nombre_genero']} </td>
        <td>  {$row['correo']} </td>
        <td>  {$row['telefono']} </td>
        <td>  {$row['fecha_ingreso']} </td>
        </tr>";


}
} else {
    echo "<p>nose encontro</p>";
}
$conexion->close();
        ?>
    
    </table>
</div>
</body>
</html>