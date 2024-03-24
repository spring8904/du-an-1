<?php

function userListAll()
{
  $title = 'Danh sách người dùng';
  $view = 'users/index';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];

  $users = listAll('tb_nguoi_dung');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userShowOne($id)
{
  $user = showOne('tb_nguoi_dung', $id);
  if (empty($user)) {
    e404();
  }
  $title = $user['ho_ten'];
  $view = 'users/detail';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userCreate()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_nguoi_dung';

    $data = [
      'email' => $_POST['email'],
      'mat_khau' => $_POST['mat_khau'],
      'ho_ten' => $_POST['ho_ten'],
      'gioi_tinh' => $_POST['gioi_tinh'],
      'dia_chi' => $_POST['dia_chi'],
      'ngay_sinh' => $_POST['ngay_sinh'],
      'so_dien_thoai' => $_POST['so_dien_thoai'],
      'id_cv' => $_POST['id_cv'],
    ];

    if ($_FILES['avatar']['size'] !== 0) {
      $avatar = uploadImage($_FILES['avatar']);

      if ($avatar) {
        $data['avatar'] = $avatar;
        insert($tableName, $data);
      } else {
        $err = 'Có lỗi xảy ra, vui lòng kiểm tra lại.';
      }
    }

    header('Location: ./?act=users');
    exit();
  }

  $title = 'Thêm người dùng';
  $view = 'users/create';
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function userUpdate($id)
{
  $tableName = 'tb_nguoi_dung';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = [
      'email' => $_POST['email'],
      'mat_khau' => $_POST['mat_khau'],
      'ho_ten' => $_POST['ho_ten'],
      'gioi_tinh' => $_POST['gioi_tinh'],
      'dia_chi' => $_POST['dia_chi'],
      'ngay_sinh' => $_POST['ngay_sinh'],
      'so_dien_thoai' => $_POST['so_dien_thoai'],
      'id_cv' => $_POST['id_cv'],
    ];

    if ($_FILES['avatar']['size'] !== 0) {
      $avatar = uploadImage($_FILES['avatar']);
      $data['avatar'] = $avatar;
    }

    update($tableName, $id, $data);

    header('Location: ./?act=users');
  } else {
    $user = showOne($tableName, $id);
    $title = 'Cập nhật người dùng';
    $view = 'users/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  }
}

function userDelete($id)
{
  $tableName = 'tb_nguoi_dung';

  delete($tableName, $id);

  header('Location: ./?act=users');
}
