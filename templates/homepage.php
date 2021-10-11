<?php include "templates/include/header.php" ?>
    
    <div class="hero">
      <div>
        <h2>Binvenido a mi blog</h2>
        <p>Notas sobre tenis que te ayudaran a pasar un buen rato</p>
      </div>
      <div>
        <img src="templates\images\nadal.jpg" alt="" class="hero-img"> 
      </div>
    </div>

      <ul id="headlines">

   <?php   include ('include/article.php')    ?>
      </ul>

      <p><a href="./?action=archive">Historial de Notas</a></p>

<?php include "templates/include/footer.php" ?>