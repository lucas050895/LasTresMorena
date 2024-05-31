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
        include('../layout/nav.php');
    ?>

    <main>
        <form action="busqueda1.php" method="GET">
            <input type="text" name="busqueda" placeholder="Busqueda de articulo.." required>
            <input type="submit" value="Buscar">
        </form>
    </main>

    <?php
        include('../layout/footer.php');
    ?>
</body>
</html>