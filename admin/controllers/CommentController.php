<?php

function getCommentsByProductId($productId)
{
    $comments = listAll('tb_binh_luan');
    $result = [];
    foreach ($comments as $comment) {
        if ($comment['id_sp'] == $productId) {
            $result[] = $comment;
        }
    }
    return $result;
}
