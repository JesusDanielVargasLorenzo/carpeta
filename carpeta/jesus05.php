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
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus07.html">peliculas</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus08.html">dragon ball</a><br>
                            <a class="dropdown-item" href="https://jesusdanielvargaslorenzo.github.io/grupo4A/carpeta/carpeta/jesus09.html">API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </nav>

    <div class="jumbotron">
        <h1  class="display-4 font" style="text-align: center; color: #1E224; ">Mostrar Datos</h1>
        <style>
           
            
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 50px;
                border-radius: 50px;
            }
            
            th,td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid rgb(158, 8, 151);
            }
            
            tr:nth-child(even) {
                background-color: rgb(247, 92, 221);
                color: black;
            }
            
            tr:nth-child(odd) {
                background-color: white;
                color: black;
            }
            
            th {            
                background-color: rgb(255, 64, 214);
                color: white;
            }

        
        </style>
       <style>
         .container1{
                width:60%;
                background-color:#282a36;
                padding:20px;
                border-radius:10px;
                box-shadow: 0 0 10px;
                color:white;
            }
            h1{
                text-align:center;
                color:#ff79c6;
                margin-bottom:15px;
            }
      form{
                flex-direction:column;
            }
            label{
                font-size:16px;
                margin-bottom:5px;
            }
            input[type="text"] {
                display:flex;
                justify-content:center;
                align-items:center;
                padding: 8px;
                margin-bottom: 10px;
                border: none;
                border-radius:5px;
                font-size:16px;
                background-color:#44475a;
                color:#fff;
            }
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
                background-color:#fff;
                
            }


        </style>

        <h1 class="display-4 font" style="text-align: center; font-family: 'Feltpen', sans-serif;">Nombre del profe</h1>
        </div>

<div class="container1">


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="formulario">

<label for="numero_control">Numero control</label>
<input type="text" id="numero_control" name="numero_control"
required><br>

<label for="nombre">nombre</label>
<input type="text" id="nombre" name="nombre"
required><br>

<label for="apellido_paterno">apellido_paterno</label>
<input type="text" id="apellido_paterno" name="apellido_paterno"
required><br>

<label for="apellido_materno">apellido_materno</label>
<input type="text" id="apellido_materno" name="apellido_materno"
required><br>


<label for="id_edad">edad</label>
<input type="text" id="id_edad" name="id_edad"
required><br>

<label for="id_colonia">colonia</label>
<input type="text" id="id_colonia" name="id_colonia"
required><br>

<label for="id_especialidad">especialidad</label>
<input type="text" id="id_especialidad" name="id_especialidad"
required><br>

<label for="id_genero">genero</label>
<input type="text" id="id_genero" name="id_genero"
required><br>

<label for="correo">correo</label><br>
<input style="color: black;" type="email" id="correo" name="correo"
required><br>

<label for="telefono">telefono</label>
<input type="text" id="telefono" name="telefono"
required><br>

<label for="fecha_ingreso">fecha_ingreso</label>
<input style="background-color: black;" type="date" id="fecha_ingreso" name="fecha_ingreso"
required><br>

<input type="submit" value="Agregar registro">

    </from>

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
        function insertaralumno($conexion)
        {
            if($_SERVER["REQUEST_METHOD"]=="POST") {
                
                var_dump($_POST);

                $numero_control = $conexion->real_escape_string($_POST ["numero_control"]);
                $nombre = $conexion->real_escape_string($_POST ["nombre"]);
                $apellido_paterno = $conexion->real_escape_string($_POST ["apellido_paterno"]);
                $apellido_materno = $conexion->real_escape_string($_POST ["apellido_materno"]);
                $id_edad = $conexion->real_escape_string($_POST ["id_edad"]);
                $id_colonia = $conexion->real_escape_string($_POST ["id_colonia"]);
                $id_especialidad = $conexion->real_escape_string($_POST ["id_especialidad"]);
                $id_genero = $conexion->real_escape_string($_POST ["id_genero"]);
                $correo = $conexion->real_escape_string($_POST ["correo"]);
                $telefono = $conexion->real_escape_string($_POST ["telefono"]);
                $fecha_ingreso = $conexion->real_escape_string($_POST ["fecha_ingreso"]);

                $sql = "INSERT INTO alumnos 
                (numero_control, nombre, apellido_paterno, apellido_materno,
                id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
                VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno',
                '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";

                if($conexion->query($sql) == TRUE) {
                    echo "<p class='success'>Nuevo alumno agrregado con éxito.</p>";
                    header("location: " . $_SERVER['PHP_SELF']);
                    exit();
                } else {
                    echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
                }
            }
        }
insertaralumno($conexion);


$sql = "SELECT * FROM alumnos";
$resultado = $conexion->query($sql);


if ($resultado->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "<tr>
    <th>numero_control</th>
    <th>nombre</th>
    <th>apellido_paterno</th>
    <th>apellido_materno</th>
    <th>id_edad</th>
    <th>id_colonia</th>
    <th>id_especilidad</th>
    <th>id_genero</th>
    <th>correo</th>
    <th>telefono</th>
    <th>fecha_ingreso</th>
    </tr>";
    while($row = $resultado->fetch_assoc()){
        echo "<tr>
        <td>" . $row['numero_control'] . "</td>
        <td>" . $row['nombre'] . "</td>
        <td>" . $row['apellido_paterno'] . "</td>
        <td>" . $row['apellido_materno'] . "</td>
        <td>" . $row['id_edad'] . "</td>
        <td>" . $row['id_colonia'] . "</td>
        <td>" . $row['id_especialidad'] . "</td>
        <td>" . $row['id_genero'] . "</td>
        <td>" . $row['correo'] . "</td>
        <td>" . $row['telefono'] . "</td>
        <td>" . $row['fecha_ingreso'] . "</td>
        </tr>";
    }
    echo "</table>";
}   else{
    echo "<p>No se encontraron registros en la base de datos</p>";
}
$conexion->close();
?>
</div>
</body>
</html>