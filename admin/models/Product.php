<?php

if (!function_exists('getProductsByCategory')) {
  function getProductsByCategory($id_dm)
  {
    try {
      $sql = "SELECT * FROM tb_san_pham WHERE id_dm = :id_dm ORDER BY id DESC";

      $stmt = $GLOBALS['conn']->prepare($sql);

      $stmt->bindParam(':id_dm', $id_dm);

      $stmt->execute();

      return $stmt->fetchAll();
    } catch (\Exception $e) {
      debug($e);
    }
  }
}
