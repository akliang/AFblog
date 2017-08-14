<?php snippet('header') ?>

<div class=container>
<div class="col-md-3 col-xs-1"></div>


<div class="col-md-6 col-xs-10">

  <!--<main class="main" role="main">-->
    
    <!--<article class="article single wrap">-->

      <header class="article-header">
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->date('F jS, Y') ?>
        </div>
        <hr />
      </header>
      
      <?php snippet('coverimage', $page) ?>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    <!--</article>-->
    
    <?php snippet('prevnext', ['flip' => true]) ?>
    
  <!--</main>-->

</div>
<div class="col-md-3 col-xs-1"></div>

<?php snippet('footer') ?>
