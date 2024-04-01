<?php

function searchProducts($keyword)
{
  try {
    $sql = "SELECT * FROM tb_san_pham WHERE ten_sp LIKE CONCAT('%', :keyword, '%')";

    $stmt = $GLOBALS['conn']->prepare($sql);

    $stmt->bindParam(':keyword', $keyword);

    $stmt->execute();

    return $stmt->fetchAll();
  } catch (\Exception $e) {
    debug($e);
  }
}
