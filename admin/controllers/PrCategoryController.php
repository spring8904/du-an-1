<?php

function prCategoryListAll()
{
  $title = 'Danh sách danh mục sản phẩm';
  $view = 'prCategories/index';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];

  $prCategories = listAll('tb_danh_muc_sp');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  unset($_SESSION['success']);
}

function prCategoryCreate()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_danh_muc_sp';

    $data = [
      'ten_dm' => $_POST['ten_dm'],
      'mo_ta' => $_POST['mo_ta'],
    ];

    if (empty($_POST['ten_dm'])) {
      $_SESSION['error'][] = 'Tên danh mục không được để trống!';
    }

    if ($_FILES['hinh_anh']['size'] !== 0) {
      $result = uploadImage($_FILES['hinh_anh']);

      if (is_array($result)) {
        foreach ($result as $error) {
          $_SESSION['error'][] = $error;
        }
      } else {
        $data['hinh_anh'] = $result;
      }
    }

    if (!empty($_SESSION['error'])) {
      header('Location: ./?act=prCategory-create');
      exit();
    }

    insert($tableName, $data);
    $_SESSION['success'] = 'Thêm danh mục sản phẩm thành công!';
    header('Location: ./?act=prCategories');
    exit();
  }

  $title = 'Thêm danh mục sản phẩm';
  $view = 'prCategories/create';
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  unset($_SESSION['error']);
}

function prCategoryUpdate($id)
{
  $tableName = 'tb_danh_muc_sp';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
      'ten_dm' => $_POST['ten_dm'],
      'mo_ta' => $_POST['mo_ta'],
    ];

    if (empty($_POST['ten_dm'])) {
      $_SESSION['error'][] = 'Tên danh mục không được để trống!';
    }

    if ($_FILES['hinh_anh']['size'] !== 0) {
      $result = uploadImage($_FILES['hinh_anh']);

      if (is_array($result)) {
        foreach ($result as $error) {
          $_SESSION['error'][] = $error;
        }
      } else {
        $data['hinh_anh'] = $result;
      }
    }

    if (!empty($_SESSION['error'])) {
      header('Location: ./?act=prCategory-update&id=' . $id);
      exit();
    }

    update($tableName, $id, $data);
    $_SESSION['success'] = 'Cập nhật danh mục sản phẩm thành công!';

    header('Location: ./?act=prCategories');
  } else {
    $prCategory = showOne($tableName, $id);
    $title = 'Cập nhật danh mục sản phẩm';
    $view = 'prCategories/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
    unset($_SESSION['error']);
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
  $_SESSION['success'] = 'Xóa danh mục sản phẩm thành công!';

  header('Location: ./?act=prCategories');
}
