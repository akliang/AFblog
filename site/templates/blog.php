<?php snippet('header') ?>

<div class=row>
  <div class="col-md-2 col-xs-1"></div>
  <div class="col-md-8 col-xs-10">
  <!-- begin main site content -->

  <main>
    <!-- setting up variables -->
    <?php 
      $perpage=$page->perpage()->int();
      $list=$page->children()->visible()->flip()->paginate($perpage); 
      $pagination = $list->pagination();
    ?>

    <!-- print out the blog articles -->
    <?php foreach($list as $article): ?>
      <article>
      <p class=article-title><?php echo $article->title()->html() ?></p>
      <?php 
        $image=$article->coverimage()->toFile();
        if ($image):
      ?>
        <img src="<?= $image->url() ?>" alt="" class=coverimage>
      <?php endif ?>
      <div class=article-date>Posted on <?php echo $article->date('F j, Y') ?> by <?php echo $article->author() ?></div>
      <?php if ($image): ?>
        <hr class=coverimage>
      <?php endif ?>


      <div class="text">
        <?= $article->text()->kirbytext() ?>
      </div>

      <!-- todo: make sure last article doesnt have an hr -->
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
  </main>

  <!-- end main site content -->
  </div>
  <div class="col-md-2 col-xs-1"></div>
</div>

<?php snippet('footer') ?>
