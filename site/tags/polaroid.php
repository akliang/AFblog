<?php

kirbytext::$tags['polaroid'] = array(
  'attr' => array(
    'caption'
  ),

  'html' => function($tag) {
    $url     = $tag->attr('polaroid');
    $caption = $tag->attr('caption');
    $file    = $tag->file($url);

    // Crop and square the image
    if ($file->width() > $file->height() ) {
      $cropsize=$file->height();
    } else {
      $cropsize=$file->width();
    }
    $crop=$file->crop($cropsize);

    $figure = new Brick('figure');
    $figure->addClass('polaroid');
    $figure->append('<img src=' . $crop->url() . '>');
    if(!empty($caption)) {
      $figure->append('<div class=polaroid_caption>' . html($caption) . '</div>');
    }

    return $figure;
  }
);

?>
