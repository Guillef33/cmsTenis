<?php include "templates/include/header.php" ?>

      <h1>Ultimas publicaciones</h1>

      <ul id="headlines">

        <?php   include ('include/article.php')    ?>

      </ul>

      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="./">Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>