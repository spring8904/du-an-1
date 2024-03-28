<?php

function CommentListAll()
{
    $title = 'Danh sách bình luận';
    $view = 'comments/index';
    $styles = ['styles/datatable'];
    $scripts = ['scripts/datatable'];

    $posts = listAllcomment();

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
    unset($_SESSION['success']);
}

function commentShowOne($id)
{
    $comment = showOnecomment($id);

    if (empty($comment)) {
        e404();
    }

    $title = $comment['p_tieu_de'];
    $view = 'comments/detail';
    $styles = ['styles/datatable'];
    $scripts = ['scripts/datatable'];

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function commentCreate()
{
    $users = listAll('tb_nguoi_dung');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $comments = 'tb_binh_luan';

        $err = validateComment(true);

        if (!empty($err)) {
            $_SESSION['error'] = $err;
        } else {
            $data = [
                'id_nd' => $_SESSION['user']['id'],
                'tieu_de' => $_POST['tieu_de'],
                'noi_dung' => $_POST['noi_dung'],
                'ngay_dang' => date('Y-m-d H:i:s'),
                'hinh_anh' => uploadImage($_FILES['hinh_anh'], 'posts')
            ];
            insert($comments, $data);
            $_SESSION['success'] = 'Thêm bài viết thành công!';
            header('Location: ./?act=posts');
            exit();
        }
    }

    $title = 'Tạo bài viết';
    $view = 'posts/create';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
    unset($_SESSION['error']);
}

function CommentUpdate($id)
{
    $tableName = 'tb_bai_viet';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $err = validatePost();

        if (!empty($err)) {
            $_SESSION['error'] = $err;
        } else {
            $data = [
                'tieu_de' => $_POST['tieu_de'],
                'noi_dung' => $_POST['noi_dung'],
                'ngay_sua' => date('Y-m-d H:i:s'),
            ];

            if ($_FILES['hinh_anh']['size'] !== 0) {
                $imgThumbnail = uploadImage($_FILES['hinh_anh'], 'posts');
                $data['hinh_anh'] = $imgThumbnail;
            }

            update($tableName, $id, $data);
            $_SESSION['success'] = 'Cập nhật bài viết thành công!';
            header('Location: ./?act=posts');
            exit();
        }
    }

    $post = showOne($tableName, $id);
    if (empty($post)) {
        e404();
    }

    $title = 'Cập nhật bài viết';
    $view = 'posts/update';
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
    unset($_SESSION['error']);
}

function CommentDelete($id)
{
    $post = showOne('tb_bai_viet', $id);

    if (empty($post)) {
        e404();
    }

    delete('tb_binh_luân', $id);

    if ($post['hinh_anh'] && file_exists(PATH_UPLOADS . 'posts/' . $post['hinh_anh'])) {
        unlink(PATH_UPLOADS . 'comments/' . $post['hinh_anh']);
    }

    $_SESSION['success'] = 'Xóa thành công bình luận';

    header('Location: ' . BASE_URL_ADMIN . '?act=comments');
    exit();
}

function validatecomment($checkImage = false)
{
    $err = [];

    if (empty($_POST['tieu_de'])) {
        $err[] = 'Vui lòng nhập tiêu đề';
    }

    if (empty($_POST['noi_dung'])) {
        $err[] = 'Vui lòng nhập nội dung';
    }

    if ($checkImage) {
        $error = validateImage($_FILES['hinh_anh']);
        if ($error) {
            $err[] = $error;
        }
    }

    return $err;
}
