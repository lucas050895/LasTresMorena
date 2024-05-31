<header>
    <nav>
        <div id="icono">
            <i class="fas fa-bars"></i>
        </div>

        <div class="enlaces uno" id="enlaces">
            <ul>
                <li>
                    <a href="http://192.168.1.95/LasTresMorenas/">
                        <i class="fas fa-home"></i>Inicio
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-list"></i>Rubros
                    </a>
                </li>

                <li>
                    <a href="http://192.168.1.95/LasTresMorenas/links/busqueda.php">
                        <i class="fas fa-search"></i>Busqueda
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="far fa-address-card"></i>Nosotros
                    </a>
                </li>
            </ul>
        </div>

        <div class="desktop">
            <ul>
                <li>
                    <a href="http://192.168.1.95/LasTresMorenas/">
                        <i class="fas fa-home"></i>
                        <span>Inicio</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-list"></i>
                        <span>Rubros</span>
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
                                                <a href="http://192.168.1.95/LasTresMorenas/links/familia<?php echo $row['codigo'];?>.php"> <?php echo $descripcion ?></a>
                                            </li>
                                        <?php
                                    }
                                }
                            }
                        ?>
                    </ul>
                </li>

                <li>
                    <a href="http://192.168.1.95/LasTresMorenas/links/busqueda.php">
                        <i class="fas fa-search"></i>
                        <span>Busqueda</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="far fa-address-card"></i>
                        <span>Nosotros</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <h1>
            <a href="http://192.168.1.95/LasTresMorenas/">
                Las Tres Morena
            </a>
        </h1>
    </div>
</header>