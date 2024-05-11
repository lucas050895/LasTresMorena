<?php
    include('bd/conecxion.php');
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
    <!-- DESCRIPCION -->
    <meta name="description" content="Sitio web de articulos y accesorio de pesca">
    <!-- AUTOR -->
    <meta name="author" content="Lucas Conde">
    <!-- TITULO -->
    <title>Las Tres Morenas</title>


    <link rel="stylesheet" href="css/index.css">

    <script src="https://kit.fontawesome.com/439ee37b3b.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        include('layout/nav.php');
    ?>

    <main>
        <section>
            <div class="slider-contenedor">
                <?php
                    if($conexion) {
                        $consultation = "SELECT *
                                            FROM articulos
                                            WHERE foto LIKE '%descarga%'
                                            GROUP BY (proveedor)
                                            LIMIT 10";
                        $resultado = mysqli_query($conexion,$consultation);
                
                        if($resultado){
                            while($row = $resultado->fetch_array()){
                                $codigo = $row['codigo'];
                                $descripcion = $row['descripcion'];
                                $foto = $row['foto'];
                
                                ?>
                                    <div class="contenido-slider">
                                        <div>
                                            <img src="resource/<?php echo $foto ?>" alt="<?php echo $descripcion ?>">
                                        </div>
                                        <div>
                                            <a href="#"> <?php echo $descripcion ?></a>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    }
                ?>
            </div>
        </section>
        
        <div id="productos">
            <section>
                <h2>Cañas</h2>
                <div>
                    <div>
                        <i class="fas fa-chevron-circle-left"></i>
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                    <ul class="scroll">
                        <?php
                            if($conexion) {
                                $consultation = "SELECT *
                                                    FROM articulos
                                                    WHERE descripcion LIKE 'caña%'
                                                    LIMIT 10";
                                $resultado = mysqli_query($conexion,$consultation);
                        
                                if($resultado){
                                    while($row = $resultado->fetch_array()){
                                        $descripcion = $row['descripcion'];
                                        $precio = $row['precioventaunidades1'];
                                        $foto = $row['foto'];
                                        
                                        ?>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo $foto ?>" alt="foto">
                                                    <?php echo $descripcion ?>
                                                    <h2><?php echo $precio ?></h2>
                                                </a>
                                            </li>
                                            <?php
                                    }
                                }
                            }
                        ?>
                        <li>
                            <button>
                                <a href="#"> Ver mas</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
            
            <section>
                <h2>Reel</h2>
                <div>
                    <div>
                        <i class="fas fa-chevron-circle-left"></i>
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                    <ul class="scroll">
                        <?php
                            if($conexion) {
                                $consultation = "SELECT *
                                                    FROM articulos
                                                    WHERE descripcion LIKE 'reel%'
                                                    LIMIT 10";
                                $resultado = mysqli_query($conexion,$consultation);
                                
                                if($resultado){
                                    while($row = $resultado->fetch_array()){
                                        $descripcion = $row['descripcion'];
                                        $precio = $row['precioventaunidades1'];
                                        $foto = $row['foto'];
                                        
                                        ?>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo $foto ?>" alt="foto">
                                                    <?php echo $descripcion ?>
                                                    <h2><?php echo $precio ?></h2>
                                                </a>
                                            </li>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        <li>
                            <button>
                                <a href="#"> Ver mas</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
            
            <section>
                <h2>Ancla</h2>
                <div>
                    <div>
                        <i class="fas fa-chevron-circle-left"></i>
                        <i class="fas fa-chevron-circle-right"></i>
                    </div>
                    <ul class="scroll">
                        <?php
                            if($conexion) {
                                $consultation = "SELECT *
                                                    FROM articulos
                                                    WHERE descripcion LIKE 'ancla%'
                                                    LIMIT 10";
                                $resultado = mysqli_query($conexion,$consultation);
                                
                                if($resultado){
                                    while($row = $resultado->fetch_array()){
                                        $descripcion = $row['descripcion'];
                                        $precio = $row['precioventaunidades1'];
                                        $foto = $row['foto'];
                                        
                                        ?>
                                            <li>
                                                <a href="#">
                                                    <img src="<?php echo $foto ?>" alt="foto">
                                                    <?php echo $descripcion ?>
                                                    <h2><?php echo $precio ?></h2>
                                                </a>
                                            </li>
                                            <?php
                                    }
                                }
                            }
                            ?>
                        <li>
                            <button>
                                <a href="#"> Ver mas</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        
        <div id="rubros">
            <ul>
                <?php
                    if($conexion) {
                        $consultation = "SELECT *
                                            FROM familias";
                        $resultado = mysqli_query($conexion,$consultation);
                
                        if($resultado){
                            while($row = $resultado->fetch_array()){
                                $descripcion = $row['descripcion'];
                
                                ?>
                                    <li>
                                        <a href="#"> <?php echo $descripcion ?></a>
                                    </li>
                                <?php
                            }
                        }
                    }
                ?>
            </ul>
        </div>

        <article class="cont-princ-slider">
                <div class="slier-prin">
                    <div class="juegos_DWG">01</div>
                    <div class="juegos_DWG">02</div>
                    <div class="juegos_DWG">03</div>
                    <div class="juegos_DWG">04</div>
                    <div class="juegos_DWG">05</div>
                    <div class="juegos_DWG">06</div>
                </div>
        </article>
    </main>


    <footer>
        <div>
            <a href="#">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="#">
                <i class="fab fa-instagram-square"></i>
            </a>

            <a href="tel:123456">
                <i class="fas fa-phone-alt"></i>
            </a>

            <a href="#">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
        <div>
            <h2>
                Las Tres Morenas
            </h2>
            <p>
                <i class="far fa-copyright"></i>
                Todos Los Derechos reservados
            </p>
        </div>
    </footer>

    <a href="#">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="js/main.js"></script>
</body>
</html>