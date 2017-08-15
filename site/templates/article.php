<?php snippet('header') ?>

<div class=row>
  <div class="col-md-2 col-xs-1"></div>
  <div class="col-md-8 col-xs-10">
  <!-- begin main site content -->

  <main>
    <!-- setting up variables -->
    <?php 
      $article=$page;
    ?>

    <!-- print out the blog articles -->
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


  </main>

  <!-- end main site content -->
  </div>
  <div class="col-md-2 col-xs-1"></div>
</div>

<?php snippet('footer') ?>
