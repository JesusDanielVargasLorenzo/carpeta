<?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "pepito";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexion Fallida: " . $conexion->connect_error);
        }

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $id_categoria = $_POST["categoria"];
            $sql = "INSERT INTO productos (nombre, precio, id_categoria)
            VALUES ('$nombre', '$precio', '$id_categoria')";
            if ($conexion->query($sql) == TRUE) {
                echo "<p style='color: blue';>producto agregado correctamente</p>";
            }else {
                echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
            }
        }
        $sql_categorias = "SELECT * FROM categorias";
        $result_categorias = $conexion->query($sql_categorias);
?>

<html>
    <head>
        <title>
            pagina del profe que es aparte pero igual es una pagina del profe.
        </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
                            <a class="dropdown-item" href="/carpeta/jesus01.php">UNO</a><br>
                            <a class="dropdown-item" href="/carpeta/jesus02.php">DOS</a><br>
                            <a class="dropdown-item" href="/carpeta/jesus03.php">3 Tristes Tigres</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 2</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/carpeta/jesus04.php">CUATO</a><br>
                            <a class="dropdown-item" href="/carpeta/jesus05.php">SinKo</a><br>
                            <a class="dropdown-item" href="/carpeta/daniel05.php">pagina 5.1</a><br>
                            <a class="dropdown-item" href="/carpeta/daniel.php">PEPITO PRO</a><br>
                            <a class="dropdown-item" href="/carpeta/jesus06.html">Pokemon</a><br>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" style="color: white; font-family: 'Madelis Script', sans-serif;"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Unidad 3</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/carpeta/jesus07.html">MOBIE</a><br>
                            <a class="dropdown-item" href="/carpeta/jesus08.html">DRAGON BALL</a><br>
                            <a class="dropdown-item" href="/carpeta/jesus09.html">API</a><br>
                        </div>
                    </li>

                    
                </ul>
            </div>
        </nav>
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
            
        
        </style>
        <h1>registrar nuevos productos</h1>
        <form method ="POST">
            <label>Nombre del producto: </label>
            <input type="text" name="nombre" required><img src="capi.png" width="20"><br></br>
            <label>Precio: </label>
            <input type="number" name="precio" required><img src="capi.png" width="20"><br></br>
            <label>Categoria: </label>
           <select name="categoria" required >
            <option value="">Seleccionar categoria</option>
            <?php
            if ($result_categorias->num_rows > 0) {
                while($row = $result_categorias->fetch_assoc()){
                    echo "<option value='" . $row["id"] . "'>" . $row["nombre"] . "</option>";
                }
            }
            ?>
           </select><img src="capi.png" width="20"><br></br>
           <input type="submit" value="agregar producto">
        </form>
        <h2>lista de productos</h2>
        <table>
            <tr>
                <th>nombre </th>
                <th>precio</th>
                <th>categoria</th>
            </tr>
            <?php
            $sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS
            categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";

            $resultado_productos = $conexion->query($sql_productos);
            if($resultado_productos->num_rows>0){
                while($row = $resultado_productos -> fetch_assoc()){
                    echo "<tr>
                    <th>{$row['nombre']}</th>
                    <th>{$row['precio']}</th>
                    <th>{$row['categoria']}</th>
                    </tr>";
                }
            } else {
                echo "<tr><td> no hay productos registrados </tr></td>";
            }
            ?>
        </table>
    </body>
</html>