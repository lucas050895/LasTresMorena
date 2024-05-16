<!-- <?php
    include('../bd/conecxion.php');
?> -->
<header>
    <nav>
        <div class="hamburger">
            <div class="_layer -top"></div>
            <div class="_layer -mid"></div>
            <div class="_layer -bottom"></div>
        </div>
        <div class="menuppal">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-list"></i>
                        Rubros
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
                                                <a href="#">
                                                    <?php echo $descripcion ?>
                                                </a>
                                            </li>
                                        <?php
                                    }
                                }
                            }
                        ?>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-address-card"></i>
                        Sobre Nosotros
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div>
        <h1>Las Tres Morena</h1>
    </div>

    <div id="origina_amen_1" class="busqueda">
        <i class="fas fa-search"></i>
    </div>

    <div id="modal_container" class="modal-container">
        <div class="modal">
            <button id="close">
                <i class="fas fa-times"></i>
            </button>
            <form action="links/busqueda.php" method="post">
                <label for="buscar">Busqueda de artículos</label>
                <input type="text" name="buscar" id="buscar" placeholder="Ejemplo: caña">
                <input type="submit" value="Buscar">
            </form> 
        </div>
    </div>
</header>

