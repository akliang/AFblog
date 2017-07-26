<article>
  <h1><?php echo html($article->title()) ?></h1>
  <time><?php echo $article->date('d/m/Y') ?></time>
  <?php echo kirbytext($article->intro()) ?></p>
  <a href="<?php echo $article->url() ?>">Read more…</a>
</article>