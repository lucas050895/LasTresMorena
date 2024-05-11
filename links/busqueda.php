<?php
    include('../bd/conecxion.php');

    $where= "";
    if(!empty($_POST)){
        $valor = $_POST['buscar'];

        if(!empty($valor)){
            $where = "WHERE descripcion LIKE '$valor%' ";
        }
    }
    $consulta = "SELECT * FROM articulos $where";

    $resultado = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/general.css">

    <script src="https://kit.fontawesome.com/439ee37b3b.js" crossorigin="anonymous"></script>
</head>
<body>

    <nav>
        <div>
            <i class="fas fa-bars"></i>
            <h1>Las Tres Morenas</h1>
            <i class="fas fa-search" onclick="MostrarOcultar()"></i>
        </div>

        <div id="ocultar">
            <form action="busqueda.php" method="post">
                <label for="search">Busqueda : </label>
                <input type="text" name="buscar" id="search" class="search" required>
                <input type="submit" value="Buscar">
            </form>
        </div>
    </nav>

    <div>
        <?php
            while($row = $resultado->fetch_assoc()){
                ?>
                    <h2>
                        <?php
                            echo $row['codigo'];
                            echo $row['descripcion'];
                        ?>
                    </h2>
                <?php
            }
        ?>
    </div>

    <script src="../js/index.js"></script>
</body>   
</html>