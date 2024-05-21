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
    <!-- DESCRIPTION -->
    <meta name="description" content="Sitio web de artículos y accesorios de pesca.">
    <!-- AUTHOR -->
    <meta name="author" content="Lucas Conde">
    <!-- TITTLE -->
    <title>Las Tres Morena</title>
    <!-- STYLES -->
    <link rel="stylesheet" href="css/index.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/439ee37b3b.js" crossorigin="anonymous"></script>
    </head>
<body>


    <main>
        <?php
            include('layout/nav.php');
        ?>



        <div id="ofertas">
            <div class="slider-contenedor">
                <?php
                    if($conexion) {
                        $consultation = "SELECT *
                                            FROM articulos
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
        </div>
        
        <div id="productos">
            <section>
                <h2>
                    <a href="#">
                        Cañas
                    </a>
                </h2>
                <div>
                    <div>
                        <i class="fas fa-chevron-circle-left caña-left"></i>
                        <i class="fas fa-chevron-circle-right caña-right"></i>
                    </div>
                    <ul class="scroll-caña">
                        <?php
                            if($conexion) {
                                $consultation = "SELECT LEFT (descripcion, 18) AS descripcion, precioventaunidades1, foto
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
                                                    <p>
                                                        <?php echo $descripcion ?>
                                                    </p>
                                                    <h2> 
                                                        <?php echo $precio ?>
                                                    </h2>
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
                <h2>
                    <a href="#">
                        Reel
                    </a>
                </h2>
                <div>
                    <div>
                        <i class="fas fa-chevron-circle-left reel-left"></i>
                        <i class="fas fa-chevron-circle-right reel-right"></i>
                    </div>
                    <ul class="scroll-reel">
                        <?php
                            if($conexion) {
                                $consultation = "SELECT LEFT (descripcion, 18) AS descripcion, precioventaunidades1, foto
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
                                                    <p>
                                                        <?php echo $descripcion ?>
                                                    </p>
                                                    <h2> 
                                                        <?php echo $precio ?>
                                                    </h2>
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
                <h2>
                    <a href="#">
                        Anclas
                    </a>
                </h2>
                <div>
                    <div>
                        <i class="fas fa-chevron-circle-left ancla-left"></i>
                        <i class="fas fa-chevron-circle-right ancla-right"></i>
                    </div>
                    <ul class="scroll-ancla">
                        <?php
                            if($conexion) {
                                $consultation = "SELECT LEFT (descripcion, 18) AS descripcion, precioventaunidades1, foto
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
                                                    <p>
                                                        <?php echo $descripcion ?>
                                                    </p>
                                                    <h2> 
                                                        <?php echo $precio ?>
                                                    </h2>
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
                                    <li style="background-image: url(resource/ <?php $foto ?>);">
                                        <a href="#"> <?php echo $descripcion ?></a>
                                    </li>
                                <?php
                            }
                        }
                    }
                ?>
            </ul>
        </div>

        <div id="publicidad">
            <div class="move">
                <div class="box">
                    <img src="resource/1.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/2.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/3.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/4.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/5.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/6.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/7.png" alt="">
                </div>

                <!-- 2da vuelta -->
                <div class="box">
                    <img src="resource/1.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/2.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/3.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/4.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/5.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/6.png" alt="">
                </div>
                <div class="box">
                    <img src="resource/7.png" alt="">
                </div>
            </div>
        </div>

    </main>


    <footer>
        <div class="redes">
            <p>Comunicate con nosotros</p>
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

    <a href="https://wa.me/5491154768998">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="js/main.js"></script>
</body>
</html>