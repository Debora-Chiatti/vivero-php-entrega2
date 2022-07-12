<?php include('a-header.php')?>


<section class="banner">
    <h2> <?php  echo 'Nuestras Suculentas'; ?> </h2>
</section>

<section>
    <div>
        <ul class="Fotos">
            <li><a href="tienda.php?plantas=hc";><img src="../Images/pl-a.jpg" alt="hermosienta" class="tamaño"></a></li>
            <li><a href="tienda.php?plantas=pc";><img src="../Images/pl-b.jpg" alt="presocienta" class="tamaño"></a></li>
            <li><a href="tienda.php?plantas=lc";><img src="../Images/pl-c.jpg" alt="presocienta" class="tamaño"></a></li>
        </ul>
    </div>

    <?php 
        switch ($_GET['plantas']){
            case "hc":
                $nombre = 'Hermocienta';
                $descripcion = ' Planta Asiática de color nacar';
                $img = '../Images/pl-a.jpg';
            break;

            case "pc":
                $nombre = 'Preciocienta';
                $descripcion = 'Planta del Pacífico de color nacar';
                $img = '../Images/pl-b.jpg';
            break;
        
            case "lc":
                $nombre = 'Lindacienta';
                $descripcion = ' Planta de las Americas de color nacar';
                $img = '../Images/pl-c.jpg';
            break;
        }
    ?>

    <div class="Dropdown">
        <h3> <?php echo $nombre;?> </h3>
        <p> <?php echo $descripcion;?> </p>
        <div>
            <img src="<?php echo$img ?>" alt="plantas">
        </div>
        
    </div>


</section>

<?php include('a-footer.php')?>
