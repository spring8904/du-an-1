<?php

function roleListAll()
{
  $title = 'Danh sách chức vụ';
  $view = 'roles/index';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];

  $roles = listAll('tb_chuc_vu');

  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function roleCreate()
{
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tableName = 'tb_chuc_vu';

    $data = [
      'chuc_vu' => $_POST['chuc_vu'],
    ];

    insert($tableName, $data);

    header('Location: ./?act=roles');
    exit();
  }

  $title = 'Thêm chức vụ';
  $view = 'roles/create';
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function roleUpdate($id)
{
  $tableName = 'tb_chuc_vu';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data['chuc_vu'] = $_POST['chuc_vu'];
    update($tableName, $id, $data);

    header('Location: ./?act=roles');
  } else {
    $role = showOne($tableName, $id);
    $title = 'Cập nhật chức vụ';
    $view = 'roles/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  }
}

function roleDelete($id)
{
  if ($_GET['id'] == 1 || $_GET['id'] == 2) {
    echo "<script>alert('Không thể xóa chức vụ này!'); window.location='?act=roles';</script>";
    exit();
  }

  $tableName = 'tb_chuc_vu';

  delete($tableName, $id);

  header('Location: ./?act=roles');
}
