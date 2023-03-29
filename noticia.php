<?php 

include "db.php";

$id_noticia = $_GET["not"];

$result = $db->query("SELECT * FROM noticias WHERE noticias.id = $id_noticia");

include "header.php";

if ($fila=$result->fetch_assoc()){

?>


<section class="noticia" id="noticia">



    <div class="w-960 centrado">

        <div class="cabecera-noticia">

            <h2><?php echo $fila["titulo"]; ?></h2>

            <p><?php echo $fila["intro"]; ?></p>

        </div>

        <img src="img/noticias/<?php echo $fila["foto"]; ?>" alt="foto de la noticia">


        <h5><?php echo $fila["autor"]; ?></h5>
        <span><?php echo $fila["fecha"]; ?></span>

        <p><?php echo $fila["texto"]; ?></p>

    </div>

</section>



<?php 
}
include "footer.php"

?>