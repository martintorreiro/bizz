<?php  
  include "header.php"
  ?>

<section id="precios" class="precios">

    <section class="bg-grey">
        <div class="centrado w-960">
            <div class="title">
                <h2>Contact Us</h2>
                <p>Aspernatur at enim excepturi facere in reiciendis</p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="w-960 centrado">
            <div class="section-header">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus alias aliquid delectus, dolor
                    doloremque enim eos est fugit inventore ipsam iure laudantium molestiae.</p>
            </div>

            <ul class="contact-info-container flex jc-center">
                <li>

                    <i class="fa-solid fa-play"></i>
                    <h3>Address</h3>
                    <p>132 Manhatten Str., NewYork, US</p>
                </li>
                <li>

                    <i class="fa-solid fa-phone"></i>
                    <h3>Phone Number</h3>
                    <p>1-234-567-2401</p>
                </li>
                <li>

                    <i class="fa-regular fa-envelope"></i>
                    <h3>Email</h3>
                    <p>mail@webthemez.com</p>
                </li>
            </ul>

        </div>
    </section>

    <section>

        <div class="section-header w-960 centrado">
            <h2>Let us know</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at enim excepturi facere in non
                reiciendis.</p>
        </div>

        <div class="w-960 centrado flex contact-form-container">

            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5873.867015095305!2d-8.756502506329355!3d42.59915424872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1673880684437!5m2!1ses!2ses"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div>
                <form class="contact-form flex column" method="POST" action="recibir-datos.php">
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="text" name="email" placeholder="Email">
                    <textarea cols="30" name="message" rows="10" placeholder="Message"></textarea>

                    <select name="pais" id="pais">
                        <option value="esp">España</option>
                        <option value="por">Portugal</option>
                        <option value="fra">Francia</option>
                        <option value="ale">Alemania</option>
                        <option value="ita">Italia</option>
                    </select>

                    <div>
                        <label for="m">Hombre</label>
                        <input type="radio" name="sexo" id="m" value="m">
                        <label for="f">Mujer</label>
                        <input type="radio" name="sexo" id="f" value="f">
                    </div>

                    <div>
                        <label for="a">Rojo</label>
                        <input id="a" type="checkbox" name="colores[]" value="rojo">
                        <label for="b">Amarillo</label>
                        <input id="b" type="checkbox" name="colores[]" value="amarillo">
                        <label for="c">Azul</label>
                        <input id="c" type="checkbox" name="colores[]" value="azul">
                    </div>


                    <button class="button">Enviar</button>

                </form>
            </div>

        </div>

    </section>

    <section>

        <?php

            $dir = opendir("./img");
            $extensionesPermitidas = ["jpg","png","gif","jpeg"];

            while ($elemento = readdir($dir)) {
                
                if (!is_dir("./img/" . $elemento)) {

                    $extension = pathinfo("./img/" . $elemento, PATHINFO_EXTENSION );
                                
                    if(in_array(strtolower($extension), $extensionesPermitidas)){
                    
                        echo "<a href='img/$elemento'  data-lightbox='roadtrip' class='m-25'><img src='img/$elemento' class='m-100'></a>";

                    }
                    
                }
            }        

        ?>
    </section>


</section>




<?php  
  include "footer.php"
  ?>