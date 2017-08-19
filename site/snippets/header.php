<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/index.css') ?>
  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <?= css('assets/css/custom.css') ?>

</head>
<body>
<div class=container>
  <div class=row>
    <div class="col-md-2 col-xs-1"></div>
    <div class="col-md-6 col-xs-7 header_custom">
      <div class="branding">
        <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a><br>
        <div class=site_description><?=$site->description()->html() ?></div>
      </div>
    </div>
    <div class="col-md-2 col-xs-3 header_custom">
      <div class="header_heart">&hearts;</div>
    </div>
    <div class="col-md-2 col-xs-1"></div>
  </div>

