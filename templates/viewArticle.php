<?php include "templates/include/header.php" ?>

<h1 style="width: 75%;"><?php echo $results['article']->title ?></h1>
<img src="templates/images/<?php echo $results['article']->author ?>" class="img-view" style="height:200px">
<div style="width: 75%; font-style: italic;"><?php echo $results['article']->summary ?></div>
<div style="width: 75%;"><?php echo $results['article']->content ?></div>
<p class="pubDate">Publicado el <?php echo date('j F Y', $results['article']->publicationDate) ?></p>

<!-- aca deberiamos agregar la imagen -->

<p><a href="./">Volver a la home</a></p>

<?php include "templates/include/footer.php" ?>