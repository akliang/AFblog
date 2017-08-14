<?php snippet('header') ?>

<main>
<div class=container>
<div class="col-md-2 col-xs-1"></div>


<div class="col-md-8 col-xs-10">
  <?php 
  $perpage=$page->perpage()->int();
  $list=$page->children()->visible()->flip()->paginate($perpage); 
  $pagination = $list->pagination();
  ?>

  <?php foreach($list as $article): ?>
    <article>
    <p class=article-title><?php echo $article->title()->html() ?></p>
    <p class=article-date>Posted on <?php echo $article->date('Y-m-d') ?> by <?php echo $article->author() ?></p>
    <?php 
      $image=$article->coverimage()->toFile();
      if ($image):
    ?>
      <img src="<?= $image->url() ?>" alt="">
    <?php endif ?>
    <!--<p class=article-text><?php echo $article->text()->excerpt(300) ?></p>-->
    <!--<div style="text-align:right"><a href="<?php echo $article->url() ?>">Read more >></a></div>-->

      <div class="text">
        <?= $article->text()->kirbytext() ?>
      </div>


    <hr class=article>
    </article>
  <?php endforeach ?>


<nav class=pagination>
    <?php if($pagination->hasPrevPage()): ?>
    <a href="<?php echo $pagination->prevPageURL() ?>">&larr;</a>
    <?php endif ?>

    <?php if($pagination->hasNextPage() || $pagination->hasPrevPage()): ?>
    <?php foreach($pagination->range(5) as $r): ?>
    <a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a>
    <?php endforeach ?>
    <?php endif ?>

    <?php if($pagination->hasNextPage()): ?>
    <a href="<?php echo $pagination->nextPageURL() ?>">&rarr;</a>
    <?php endif ?>
</nav>
</div>


<div class="col-md-2 col-xs-1"></div>
</div>
</main>

<?php snippet('footer') ?>
