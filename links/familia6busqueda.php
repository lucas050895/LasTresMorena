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
    <?php
            $busqueda = strtolower($_REQUEST['busqueda']);

            if(empty($busqueda)){
                header("Location: ../index.php");
            }
        ?>

        <form action="busqueda.php" method="GET">
            <input type="text" name="busqueda" placeholder="Busqueda de articulo.." required value="<?php echo $busqueda;?>">
            <input type="submit" value="Buscar">
        </form>


        <!-- CONTENEDOR LOS PRODUCTOS -->

        <?php
            // $where = '';

            $sql_registe = mysqli_query($conexion,"SELECT COUNT(*) AS total_registro FROM articulos WHERE familia = 6 AND descripcion LIKE '%$busqueda%'");
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

            $consulta = mysqli_query($conexion,"SELECT codigo, LEFT(descripcion,10) AS descripcion, precioventaunidades1 AS precio
                                                        FROM articulos
                                                        WHERE (familia = 6 AND descripcion LIKE '%$busqueda%') 
                                                        LIMIT $desde,$por_pagina");

            ?>

        <div>
            <ul>
                <?php
                    while($fila=mysqli_fetch_assoc($consulta)){
                        ?>
                            <!-- CADA PRODUCTO -->
                            <li>
                                <a href="producto.php?codigo=<?php echo $fila['codigo']; ?>">
                                    <img src="../resource/<?php echo $fila['codigo']; ?>" alt="foto">
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


        <?php
            if($total_paginas != 0){
        ?>
            <div class="paginador">
                <ul>
                    <?php
                        if($pagina !=1){
                    ?>
                        <li><a href="?pagina=<?php echo 1; ?>&busqueda=<?php echo $busqueda; ?>">|<</a></li>
                        <li><a href="?pagina=<?php echo $pagina-1 ?><?php echo $busqueda; ?>"><</a></li>
                    <?php
                        }
                        for ($i=1; $i <= $total_paginas; $i++) { 
                            if($i == $pagina){
                                echo "<li class='pageSelected'>$i</li>";
                            }else{
                            echo "<li><a href='?pagina=$i&busqueda=$busqueda'>$i</a></li>";
                            }
                        }

                        if($pagina != $total_paginas){    
                    ?>
                        <li><a href="?pagina=<?php echo $pagina+1?>&busqueda=<?php echo $busqueda; ?>">></a></li>
                        <li><a href="?pagina=<?php echo $total_paginas;?>&busqueda=<?php echo $busqueda; ?>">>|</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        <?php
            }
        ?>

    </main>
                
    <?php
        include('../layout/footer.php');
    ?>

    <script src="../js/main.js"></script>

</body>
</html>