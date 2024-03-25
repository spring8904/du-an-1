<?php

function productListAll()
{
  $title = 'Danh sách sản phẩm';
  $view = 'products/index';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];

  $products = listAll('tb_san_pham');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productShowOne($id)
{
  $product = showOne('tb_san_pham', $id);
  if (empty($product)) {
    e404();
  }
  $title = $product['ten_sp'];
  $view = 'products/detail';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productCreate()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_san_pham';

    $data = [
      'ten_sp' => $_POST['ten_sp'],
      'mo_ta' => $_POST['mo_ta'],
      'id_dm' => $_POST['id_dm'],
      'gia_sp' => $_POST['gia_sp'],
      'ngay_nhap' => $_POST['ngay_nhap'],
      'so_luong' => $_POST['so_luong'],
      'trang_thai' => $_POST['trang_thai'],
    ];

    $id_sp = insert_get_last_id($tableName, $data);
    uploadMultipleProductImages($_FILES['hinh_anh'], $id_sp);

    header('Location: ./?act=products');
    exit();
  }

  $title = 'Thêm sản phẩm';
  $view = 'products/create';
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function productUpdate($id)
{
  $tableName = 'tb_san_pham';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
      'ten_sp' => $_POST['ten_sp'],
      'mo_ta' => $_POST['mo_ta'],
      'id_dm' => $_POST['id_dm'],
      'gia_sp' => $_POST['gia_sp'],
      'ngay_nhap' => $_POST['ngay_nhap'],
      'so_luong' => $_POST['so_luong'],
      'trang_thai' => $_POST['trang_thai'],
    ];

    update($tableName, $id, $data);

    if (isset($_FILES['hinh_anh'])) {
      deleteImageProduct($id);
      uploadMultipleProductImages($_FILES['hinh_anh'], $id);
    }

    header('Location: ./?act=products');
  } else {
    $product = showOne($tableName, $id);
    $title = 'Cập nhật sản phẩm';
    $view = 'products/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  }
}

function productDelete($id)
{
  $tableName = 'tb_san_pham';

  delete($tableName, $id);
  deleteImageProduct($id);

  header('Location: ./?act=products');
}


function uploadMultipleProductImages($files, $id_sp)
{
  $files = reArrayFiles($files);
  foreach ($files as $file) {
    $image = uploadImage($file);
    if ($image) {
      $data = [
        'id_sp' => $id_sp,
        'hinh_anh' => $image,
      ];
      insert('tb_hinh_anh_sp', $data);
    }
  }
}
