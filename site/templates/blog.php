<?php snippet('header') ?>

<main>

  <?php 
  $perpage=$page->perpage()->int();
  $list=$page->children()->visible()->flip()->paginate($perpage); 
  $pagination = $list->pagination();
  ?>

  <?php foreach($list as $article): ?>
    <article>
    <h1><?php echo $article->title()->html() ?></h1>
    <h1><?php echo $article->date('Y-m-d') ?></h1>
    <p><?php echo $article->text()->excerpt(300) ?></p>
    <a href="<?php echo $article->url() ?>">Read more…</a>
    </article>
  <?php endforeach ?>


<nav>
  <ul>

    <?php if($pagination->hasPrevPage()): ?>
    <li><a href="<?php echo $pagination->prevPageURL() ?>">&larr;</a></li>
    <?php else: ?>
    <li><span>&larr;</span></li>
    <?php endif ?>

    <?php foreach($pagination->range(10) as $r): ?>
    <li><a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a></li>
    <?php endforeach ?>

    <?php if($pagination->hasNextPage()): ?>
    <li class="last"><a href="<?php echo $pagination->nextPageURL() ?>">&rarr;</a></li>
    <?php else: ?>
    <li class="last"><span>&rarr;</span></li>
    <?php endif ?>

  </ul>
</nav>


</main>

<?php snippet('footer') ?>