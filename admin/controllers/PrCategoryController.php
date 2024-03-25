<?php

function prCategoryListAll()
{
  $title = 'Danh sách danh mục sản phẩm';
  $view = 'prCategories/index';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];

  $prCategories = listAll('tb_danh_muc_sp');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function prCategoryCreate()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_danh_muc_sp';

    $data = [
      'ten_dm' => $_POST['ten_dm'],
      'mo_ta' => $_POST['mo_ta'],
    ];

    if ($_FILES['hinh_anh']['size'] !== 0) {
      $image = uploadImage($_FILES['hinh_anh']);

      if ($image) {
        $data['hinh_anh'] = $image;
      } else {
        $err = 'Có lỗi xảy ra, vui lòng kiểm tra lại.';
      }
    }

    insert($tableName, $data);
    header('Location: ./?act=prCategories');
    exit();
  }

  $title = 'Thêm danh mục sản phẩm';
  $view = 'prCategories/create';
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function prCategoryUpdate($id)
{
  $tableName = 'tb_danh_muc_sp';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
      'ten_dm' => $_POST['ten_dm'],
      'mo_ta' => $_POST['mo_ta'],
    ];

    if ($_FILES['hinh_anh']['size'] !== 0) {
      $image = uploadImage($_FILES['hinh_anh']);
      $data['hinh_anh'] = $image;
    }

    update($tableName, $id, $data);

    header('Location: ./?act=prCategories');
  } else {
    $prCategory = showOne($tableName, $id);
    $title = 'Cập nhật danh mục sản phẩm';
    $view = 'prCategories/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  }
}

function prCategoryDelete($id)
{
  if (count(getProductsByCategory($id)) > 0) {
    echo "<script>alert('Không thể xóa danh mục sản phẩm này!'); window.location='?act=prCategories';</script>";
    exit();
  }

  $tableName = 'tb_danh_muc_sp';

  delete($tableName, $id);

  header('Location: ./?act=prCategories');
}
