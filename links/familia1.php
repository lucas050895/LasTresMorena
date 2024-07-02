<?php
    include('../bd/conecxion.php');
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
        <link rel="stylesheet" href="../css/familia.css">
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/439ee37b3b.js" crossorigin="anonymous"></script>
    </head>
<body>
    <?php
        include('../layout/nav.php')
    ?>
    <main>
        <form action="familia1busqueda.php" method="GET">
            <input type="text" name="busqueda" placeholder="Busqueda de articulo.." required>
            <input type="submit" value="Buscar">
        </form>

        <!-- CONTENEDOR LOS PRODUCTOS -->

        <?php
            $sql_registe = mysqli_query($conexion,"SELECT COUNT(*) AS total_registro FROM articulos WHERE familia = 1");
            $result_register = mysqli_fetch_array($sql_registe);
            $total_registro = $result_register['total_registro'];

            $por_pagina = 30;

            if(empty($_GET['pagina'])){
                $pagina = 1;
            }else{
                $pagina = $_GET['pagina'];
            }


            $desde = ($pagina-1) * $por_pagina;
            $total_paginas = ceil($total_registro / $por_pagina);

            $consulta = mysqli_query($conexion,"SELECT codigo, LEFT(descripcion,20) AS descripcion, precioventaunidades1 AS precio
                                                        FROM articulos
                                                        WHERE familia = 1
                                                        LIMIT $desde,$por_pagina");

            ?>

        <div>
            <ul>
                <?php
                    while($fila=mysqli_fetch_assoc($consulta)){
                        ?>
                            <!-- CADA PRODUCTO -->
                            <li>
                                <img src="../resource/<?php echo $fila['codigo']; ?>.jpg" alt="">
                                <a href="producto.php?codigo=<?php echo $fila['codigo']; ?>">
                                    <div>
                                        <p><?php echo $fila['descripcion'];?></p>
                                        <p><?php echo $fila['precio'];?></p>
                                    </div>
                                </a>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </div>



        <div class="paginador">
            <ul>
                <?php
                    if($pagina !=1){
                ?>
                    <li><a href="?pagina=<?php echo 1; ?>"><i class="fas fa-angle-double-left"></i></a></li>
                    <li><a href="?pagina=<?php echo $pagina-1 ?>"><i class="fas fa-chevron-left"></i></a></li>
                <?php
                    }
                ?>

                <li class="num">
                    <p><?php echo $pagina; ?> </p> 

                    <p>/</p>

                    <p> <?php echo $total_paginas; ?> </p>
                </li>

                <?php

                    if($pagina != $total_paginas){    
                ?>
                    <li><a href="?pagina=<?php echo $pagina+1 ?>"><i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="?pagina=<?php echo $total_paginas;?>"><i class="fas fa-angle-double-right"></i></a></li>
                <?php
                    }
                ?>
            </ul>
        </div>

    </main>
                
    <?php
        include('../layout/footer.php');
    ?>

    <script src="../js/main.js"></script>

</body>
</html>