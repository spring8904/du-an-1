<?php
session_start();
// Require file trong commons
require_once '../common/env.php';
require_once '../common/helper.php';
require_once '../common/connect-db.php';
require_once '../common/model.php';

// Require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);
require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Điều hướng
$act = $_GET['act'] ?? '/';

// Biến này cần khai báo được link cần đăng nhập mới vào được
$arrRouteNeedAuth = [
  '/',
  'users', 'user-detail', 'user-create', 'user-update', 'user-delete',
];

// Kiểm tra xem admin đã đăng nhập chưa
middleware_auth_check($act, $arrRouteNeedAuth);

match ($act) {
  '/' => dashboard(),

  // CRUD Role
  'roles' => roleListAll(),
  'role-create' => roleCreate(),
  'role-update' => roleUpdate($_GET['id']),
  'role-delete' => roleDelete($_GET['id']),

  // CRUD User
  'users' => userListAll(),
  'user-detail' => userShowOne($_GET['id']),
  'user-create' => userCreate(),
  'user-update' => userUpdate($_GET['id']),
  'user-delete' => userDelete($_GET['id']),

  // Authen
  'login' => authenShowFormLogin(),
  'logout' => authenLogout(),

  default => e404(),
};

require_once '../common/disconnect-db.php';
