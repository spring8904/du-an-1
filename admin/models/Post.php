<?php

if (!function_exists('listAllForPost')) {
    function listAllForPost()
    {
        try {
            $sql = "
                SELECT 
                    p.id                as p_id,
                    p.id_nd             as p_id_nd,
                    p.tieu_de           as p_tieu_de,
                    p.mo_ta             as p_mo_ta,
                    p.hinh_anh          as p_hinh_anh,
                    p.noi_dung          as p_noi_dung,
                    p.luot_xem          as p_luot_xem,
                    p.ngay_dang         as p_ngay_dang,
                    p.ngay_sua          as p_ngay_sua,
                    us.ho_ten           as us_name,
                    us.avatar           as us_avatar
                FROM tb_bai_viet as p
                INNER JOIN tb_nguoi_dung as us ON us.id = p.id_nd
                ORDER BY p_id DESC;
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}

if (!function_exists('showOneForPost')) {
    function showOneForPost($id)
    {
        try {
            $sql = "
                SELECT 
                    p.id                as p_id,
                    p.id_nd             as p_id_nd,
                    p.tieu_de           as p_tieu_de,
                    p.mo_ta             as p_mo_ta,
                    p.hinh_anh          as p_hinh_anh,
                    p.noi_dung          as p_noi_dung,
                    p.luot_xem          as p_luot_xem,
                    p.ngay_dang         as p_ngay_dang,
                    p.ngay_sua          as p_ngay_sua,
                    us.ho_ten           as us_name,
                    us.avatar           as us_avatar
                FROM tb_bai_viet as p
                INNER JOIN tb_nguoi_dung as us ON us.id = p.id_nd
                WHERE 
                    p.id = :id
                LIMIT 1
            ";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (\Exception $e) {
            debug($e);
        }
    }
}
