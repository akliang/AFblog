<?php
kirbytext::$tags['youtube'] = array(
  'html' => function($tag) {
    $url   = $tag->attr('youtube');

    $text = new Brick('div');
    $text->addClass('youtube');
    $text->append('<iframe class=youtube src="' . $url . '" frameborder="0" allowfullscreen></iframe>');

    return $text;
  }
);
?>
