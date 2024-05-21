<!-- <?php
    include('../bd/conecxion.php');
?> -->
<header>
    <nav>
        <div id="icono">
            <i class="fas fa-bars"></i>
        </div>

        <div class="enlaces uno" id="enlaces">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>

                <li>
                    <a href="#">Rubros
                        <i class="fas fa-chevron-right"></i>
                    </a>

                    <ul>
                        <li>
                            <a href="#">Rubro1</a>
                            <a href="#">Rubro2</a>
                            <a href="#">Rubro3</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Busqueda</a>
                </li>

                <li>
                    <a href="#">Nosotros</a>
                </li>
            </ul>
        </div>

        <div class="desktop">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>

                <li>
                    <a href="#">
                        Rubros
                        <i class="fas fa-chevron-right"></i>
                    </a>
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
                </li>

                <li>
                    <a href="#">Busqueda</a>
                </li>

                <li>
                    <a href="#">Nosotros</a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <h1>Las Tres Morena</h1>
    </div>
</header>