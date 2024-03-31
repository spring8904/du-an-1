<?php

function productIndex($id)
{
  $product = showOne('tb_san_pham', $id);
  $images = getImageProducts($id);
  require_once PATH_VIEW . 'products/detail.php';
}
