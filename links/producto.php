<?php
    include('../bd/conecxion.php');

    if(isset($_GET['codigo'])){

        $resultado = $conexion -> query ('SELECT * FROM articulos WHERE codigo = "'.$_GET['codigo'].'"')or die($conexion -> error);
        if(mysqli_num_rows($resultado) > 0){ 
            $fila = mysqli_fetch_row($resultado);
        }else{
            /*SI NO EXISTE EL CODIGO DEL PRODUCTO, SE REDIRECCIONA*/
            header("Location: ../index.php");
        }
    }else{
        header("Location: ../index.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
    <head> 
        <!-- CHARSET -->
        <meta charset="UTF-8">
        <!-- IE-EDGE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- VIEWPORT -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- DESCRIPTION -->
        <meta name="description" content="Sitio web de artículos y accesorios de pesca.">
        <!-- AUTHOR -->
        <meta name="author" content="Lucas Conde">
        <!-- TITTLE -->
        <title>Las Tres Morena</title>
        <!-- STYLES -->
        <link rel="stylesheet" href="../css/producto.css">
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/439ee37b3b.js" crossorigin="anonymous"></script>
    </head>
<body>
    <?php
        include('../layout/nav.php');
    ?>

    <main>
        <div>
            <!-- FOTO -->
            <div>
                <img src="<?php echo $fila[230]?>" alt="<?php echo $fila[1]?>">
            </div>

            <div>
                <!-- DESCRIPCION/NOMBRE -->
                <h2><?php echo $fila[1] ?></h2>
                <!-- PRECIO VENTA-->
                <h2><?php echo $fila[19] ?></h2>
                <!-- CODIGO -->
                <p><?php echo $fila[0] ?></p>
            </div>
        </div>
    </main>

    <?php
        include('../layout/footer.php');
    ?>

    <script src="../js/main.js"></script>
</body>
</html>