<?php
kirbytext::$tags['youtube'] = array(
  'html' => function($tag) {
    $url = $tag->attr('youtube');

    // check if the URL contains "/embed/"
    // if not, then convert the URL into /embed/vid_id
    $embed_flag = preg_match('/\/embed\//',$url);
    if ($embed_flag == 0) {
      $vid_id = preg_replace('/.*v=/','',$url);     // find the video ID
      $vid_id = preg_replace('/\&.*/','',$vid_id);  // trim off any other parameters
      $url = "https://www.youtube.com/embed/" . $vid_id;
    }
    

    $text = new Brick('div');
    $text->addClass('youtube');
    $text->append('<iframe class=youtube src="' . $url . '" frameborder="0" allowfullscreen></iframe>');

    return $text;
  }
);
?>
