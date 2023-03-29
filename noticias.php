<?php 
include "db.php";

$result = $db->query("SELECT titulo,intro,foto,fecha,id FROM noticias");


include "header.php"

?>



<section class="section noticias">

    <div class="w-960 centrado">
        <ul class="noticias-container flex jc-sb wrap">

            <?php

                while($row = $result->fetch_assoc()){

            ?>

            <li class="noticia-listada">

                <header style="background-image:url('img/noticias/<?php echo $row["foto"]; ?>')">
                    <span class="noticia-listada_fecha"> <?php echo $row["fecha"]  ?> </span>
                </header>

                <div class="contenido-noticia flex column jc-sb">

                    <div>

                        <h2><?php echo $row["titulo"] ?></h2>

                        <p><?php echo $row["intro"] ?></p>

                    </div>
                    <a href="noticia.php?not=<?php echo $row["id"]; ?>">Leer mas...</a>

                </div>

            </li>

            <?php   }   ?>



        </ul>

        <a href="añadir-noticia.php">AÑADIR NOTICIA </a>
    </div>

</section>



<?php include "footer.php" ?>