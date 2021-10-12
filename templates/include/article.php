<?php foreach ($results['articles'] as $article) { ?>

  <li>
    <div class="articleBody">
      <div class="article-top-data">
        <img src="templates/images/<?php echo (($article->author)) ?>" class="img-view" style="height:200px">
        <p class="pubDate"><?php echo date('j F', $article->publicationDate) ?></p>
        <a class="pubDate" href="?action=articles&category=<?php echo $article->category ?>"><?php echo htmlspecialchars($article->category) ?></a>
        <p class="pubDate"><?php echo htmlspecialchars($article->author) ?></p>
      </div>
      <h2>
        <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
      </h2>
      <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
    </div>
  </li>



<?php } ?>