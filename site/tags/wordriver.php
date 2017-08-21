<?php
kirbytext::$tags['wordriver'] = array(
  'attr' => array(
    'color'
  ),

  'html' => function($tag) {
    $words = $tag->attr('wordriver');
    $color = $tag->attr('color');
    if (empty($color)) {
      $color='#000';
    }

    $text = new Brick('div');
    //$text->addClass('polaroid');
    $exp=explode(' ',$words);
    $currPos=rand(5,35);
    $prevWord='';
    foreach ($exp as $word) {
      $fontSize=rand(20,50)/10;
      $opacity=rand(4,10)/10;
      $int=rand(-strlen($prevWord),strlen($prevWord))*0.8;
      $currPos=$currPos+$int;
      if ($currPos < 0 ) { $currPos=0; }
      $prevWord=$word;
      $text->append('<p style="color:' . $color . ';opacity:' . $opacity . ';font-size:' . $fontSize .'rem;padding-left:' . $currPos . 'rem">' . $word . '</p>');
    }

    return $text;
  }
);
?>
