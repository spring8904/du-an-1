<?php

function postsIndex($id)
{
  $post = showOneForPostClient($id);

  require_once PATH_VIEW . 'posts/detail.php';
}