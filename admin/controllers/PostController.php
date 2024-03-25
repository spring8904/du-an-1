<?php

function postListAll()
{
    $title = 'Danh sách bài viết';
    $view = 'posts/index';
    $script = 'datatable';
    $script2 = 'posts/script';

    $posts = listAllForPost();

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function postShowOne($id)
{
    $post = showOneForPost($id);

    if (empty($post)) {
        e404();
    }

    $title = 'Chi tiết bài viết' . ' - ' . $post['p_title'];
    $view = 'posts/detail';
    $styles = ['styles/datatable'];
    $scripts = ['scripts/datatable'];

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function postCreate()
{
    $title = 'Tạo bài viết';
    $view = 'posts/create';


    $users = listAll('tb_nguoi_dung');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $posts = 'posts';

        $data = [
            'users_id' => $_SESSION['user']['id'],
            'title' => $_POST['title'],
            'excrept' => $_POST['excrept'],
            'content' => $_POST['content'],
        ];

        if ($_FILES['img_thumbnail']['size'] !== 0) {
            $imgThumbnail = uploadImage($_FILES['img_thumbnail']);

            if ($imgThumbnail) {
                $data['img_thumbnail'] = $imgThumbnail;
                insert($posts, $data);
            } else {
                $err = 'Có lỗi xảy ra, vui lòng kiểm tra lại.';
            }
        }

        header('Location: ./?act=posts');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function postUpdate($id)
{

    $title = 'Cập nhật bài viết';
    $view = 'posts/update';

    $tableName = 'posts';
    $post = showOne($tableName, $id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = [
            'title' => $_POST['title'],
            'excrept' => $_POST['excrept'],
            'content' => $_POST['content'],
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($_FILES['img_thumbnail']['size'] !== 0) {
            $imgThumbnail = uploadImage($_FILES['img_thumbnail']);
            $data['img_thumbnail'] = $imgThumbnail;
        }

        update($tableName, $id, $data);

        header('Location: ./?act=posts');
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function validatePostCreate($data)
{
    $errors = [];

    // Validate title
    if (empty($data['title'])) {
        $errors[] = 'Vui lòng điền tiêu đề';
    } elseif (is_array($data['title']) > 100) {
        $errors[] = 'Mô tả bài viết phải nhỏ hơn 100 ký tự';
    }

    // Validate excrept
    if (is_array($data['content']) > 300) {
        $errors[] = 'Mô tả bài viết phải nhỏ hơn 300 ký tự';
    }

    // Validate content 
    if (empty($data['content'])) {
        $errors[] = 'Vui lòng điền nội dung bài viết';
    }

    // Validate img_thumbnail
    if (empty($data['img_thumbnail'])) {
        $errors['img_thumbnail'] = 'Vui lòng nhập hình ảnh';
    } elseif (is_array($data['img_thumbnail'])) {
        $typeImage = ['image/jpeg', 'image/png', 'image/jpg'];

        if ($data['img_thumbnail']['size'] > 2 * 1024 * 1024) {
            $errors[] = 'Hình ảnh phải nhỏ hơn 2MB';
        } elseif (!in_array($data['img_thumbnail']['type'], $typeImage)) {
            $errors[] = 'Hình ảnh phải có định dạng jpeg, png, jpg';
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['data'] = $data;

        header('Location: ' . BASE_URL_ADMIN . '?act=post-create');

        exit();
    }
}

function postDelete($id)
{
    $post = showOne('posts', $id);

    if (empty($post)) {
        e404();
    }

    delete('posts', $id);

    if (!empty($post['img_thumbnail']) && file_exists(PATH_UPLOADS . 'posts/' . $post['img_thumbnail'])) {
        unlink(PATH_UPLOADS . 'posts/' . $post['img_thumbnail']);
    }

    if (!empty($post['img_cover']) && file_exists(PATH_UPLOADS . 'posts/' . $post['img_cover'])) {
        unlink(PATH_UPLOADS . 'posts/' . $post['img_cover']);
    }

    $_SESSION['success'] = 'Xóa thành công bài viết';

    header('Location: ' . BASE_URL_ADMIN . '?act=posts');
    exit();
}
