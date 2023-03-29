<?php

    include "db.php";

    $result = $db->query("SELECT * FROM categoria");

    include "header.php" 

?>

<section class="section añadir-noticia">

    <div class="w-960 centrado">

        <form class="formulario-noticia flex column jc-center ai-start" action="añadir-noticia.php" method="POST"
            enctype="multipart/form-data">

            <input name="autor" type="text" placeholder="autor">

            <textarea name="titulo" id="titulo" placeholder="titulo"></textarea>

            <textarea name="intro" id="intro" placeholder="intro"></textarea>

            <textarea name="texto" id="texto" placeholder="texto"></textarea>

            <select name="categoria" id="categoria">

                <?php

                    while($row = $result->fetch_assoc()){

                ?>

                <option value="<?php echo $row["id"]  ?>"> <?php echo $row["nombre"]  ?> </option>

                <?php 
                    };
                ?>



            </select>

            <input name="foto" id="foto" type="file" accept=".jpg , .jpeg, .png">

            <button class="button">CREAR NOTICIA</button>

        </form>

    </div>
</section>



<?php

    if (mysqli_connect_errno($con)) {
        
        echo "Fallo al conectar a MYSQL" .
        mysqli_connect_error();
    }

    if(isset($_POST["enviar"])){

        $autor = $_POST["autor"];
        $titulo = $_POST["titulo"];
        $intro = $_POST["intro"];
        $texto = $_POST["texto"];


        

        $db->query("INSERT INTO noticias (autor,titulo,intro,texto,foto,fecha) VALUES ($autor,$titulo,$intro,$texto,$foto)");

        


        

        
    }


include "footer.php" ?>