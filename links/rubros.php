<?php
    include('../bd/conecxion.php');

    if(isset($_GET['codigo'])){

        $resultado = $conexion -> query ('SELECT articulos.descripcion, articulos.precioventaunidades1, familias.codigo
                                            from articulos
                                            inner join familias on articulos.familia = familias.codigo
                                            where familias.codigo = "'.$_GET['codigo'].'"')or die($conexion -> error);
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
        <link rel="stylesheet" href="../css/rubros.css">
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/439ee37b3b.js" crossorigin="anonymous"></script>
    </head>
<body>

    <?php
        include('../layout/nav.php')
    ?>

    <main>
        <?php
            $consulta = $conexion -> query ('SELECT articulos.codigo as code,
                                                    LEFT (articulos.descripcion, 10) AS descripcion,
                                                    articulos.precioventaunidades1,
                                                    articulos.foto,
                                                    familias.codigo
                                                        from articulos
                                                        inner join familias on articulos.familia = familias.codigo
                                                        where familias.codigo = "'.$_GET['codigo'].'"')or die($conexion -> error);

            while($row = mysqli_fetch_array($consulta)){
                ?>
                    <a href="producto.php?codigo=<?php echo $row['code']; ?>">
                        <!-- FOTO -->
                        <div>
                            <img src="<?php echo $row['foto']; ?>" alt="<?php echo  $row['descripcion'] ?>">
                        </div>

                        <div>
                            <!-- DESCRIPCION/NOMBRE -->
                            <h2><?php echo  $row['descripcion'] ?></h2>
                            <!-- PRECIO VENTA-->
                            <p><?php echo  $row['precioventaunidades1'] ?></p>
                        </div>
                    </a>
                <?php
            }
        ?>
    </main>

    <?php
        include('../layout/footer.php')
    ?>


    <script src="../js/main.js"></script>
</body>
</html>