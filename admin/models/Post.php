<?php

if (!function_exists('listAllForPost')) {
    function listAllForPost(){
        try{
            $sql = "
                SELECT 
                    p.id                as p_id,
                    p.users_id          as p_users_id,
                    p.title             as p_title,
                    p.excrept           as p_excrept,
                    p.img_thumbnail     as p_img_thumbnail,
                    p.img_cover         as p_img_cover,
                    p.created_at        as p_created_at,
                    p.updated_at        as p_updated_at,
                    us.ho_ten           as us_name,
                    us.avatar           as us_avatar
                FROM posts as p
                INNER JOIN tb_nguoi_dung as us ON us.id = p.users_id
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
    function showOneForPost($id){
        try{
            $sql = "
                SELECT 
                    p.id                as p_id,
                    p.users_id          as p_users_id,
                    p.title             as p_title,
                    p.excrept           as p_excrept,
                    p.content           as p_content,
                    p.img_thumbnail     as p_img_thumbnail,
                    p.img_cover         as p_img_cover,
                    p.created_at        as p_created_at,
                    p.updated_at        as p_updated_at,
                    us.ho_ten           as us_name,
                    us.avatar           as us_avatar
                FROM posts as p
                INNER JOIN tb_nguoi_dung as us ON us.id = p.users_id
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

