<?php

function searchIndex()
{
  if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    $products = getProductsByCategory($category_id);
    $header_text = 'Danh mục: ' . showOne('tb_danh_muc_sp', $category_id)['ten_dm'];
  } elseif (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $products = searchProducts($keyword);
    $header_text = 'Kết quả tìm kiếm cho: ' . $keyword;
  } else {
    $products = listAll('tb_san_pham');
    $header_text = 'All products';
  }

  require_once PATH_VIEW . 'products/index.php';
}
