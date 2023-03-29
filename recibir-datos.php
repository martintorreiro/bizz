<?php  
  include "header.php"
  ?>

<?php

    $colores = $_POST["colores"];
    
   
    echo "<p>Hola " . $_POST["name"] . "</p> <br/> <p>Su correo electronico es: ".$_POST["email"] . "</p>" . "<br/>" .
         "<p>Pais:" . $_POST["pais"] . "</p>" . "<br/>" . "<p>Sexo: " . $_POST["sexo"] . "</p> <br/>" 
         . "</p>" 

    
?>

<?php  
  include "footer.php"
  ?>