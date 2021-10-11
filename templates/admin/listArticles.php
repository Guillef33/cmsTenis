<?php include "templates/include/header.php" ?>

      <div id="adminHeader">
        <h2>El backend para subir notas</h2>
        <p>Estas logeado como <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. 
        <a href="admin.php?action=logout"?>Log out</a></p>
      </div>

      <h1>All Articles</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

      <table>
        <tr>
          <th>Publication Date</th>
          <th>Article</th>
        </tr>

<?php foreach ( $results['articles'] as $article ) { ?>

        <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id?>'">
          <td><?php echo date('j M Y', $article->publicationDate)?></td>
          <td>
            <?php echo $article->title?>
          </td>
        </tr>

<?php } ?>

      </table>

      <p><?php echo $results['totalRows']?> articulo<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> en total.</p>

      <p><a href="admin.php?action=newArticle">Agregaar nueva nota</a></p>

<?php include "templates/include/footer.php" ?>