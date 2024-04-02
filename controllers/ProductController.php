<?php

function productIndex($id)
{
  $product = showOne('tb_san_pham', $id);
  $images = getProductImages($id);
  require_once PATH_VIEW . 'products/detail.php';
}
