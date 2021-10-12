<?php foreach ($results['articles'] as $article) { ?>

  <li>
    <div class="articleBody">
      <div class="article-top-data">
        <img src="templates\images\nadal.jpg" <?php echo htmlspecialchars($article->image) ?>">
        <p class="pubDate"><?php echo date('j F', $article->publicationDate) ?></p>
        <p class="pubDate"><?php echo htmlspecialchars($article->category) ?></p>
        <p class="pubDate"><?php echo htmlspecialchars($article->author) ?></p>
      </div>
      <h2>
        <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
      </h2>
      <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
    </div>
  </li>



<?php } ?>