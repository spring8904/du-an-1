<?php

function contactListAll() {
    $title = 'Danh sách thông tin Liên hệ Khách hàng';
    $view = 'contacts/index';
    $styles = ['styles/datatable'];
    $scripts = ['scripts/datatable'];
  
    $contacts = listAll('tb_lien_he');
  
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function contactShowOne($id) {
    $contact = showOne('tb_lien_he', $id);
  if (empty($contact)) {
    e404();
  }
  $title = $contact['ten_kh'];
  $view = 'contacts/detail';
  $styles = ['styles/datatable'];
  $scripts = ['scripts/datatable'];
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
  
}

function contactDelete($id) {
    $tableName = 'tb_lien_he';

    delete($tableName, $id);
  
    header('Location: ./?act=contacts');
}