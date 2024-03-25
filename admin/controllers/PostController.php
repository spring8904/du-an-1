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

    $title = 'Chi tiết bài viết' . ' - ' . $post['p_tieu_de'];
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
        $posts = 'tb_bai_viet';

        $data = [
            'id_nd' => $_SESSION['user']['id'],
            'tieu_de' => $_POST['tieu_de'],
            'mo_ta' => $_POST['mo_ta'],
            'noi_dung' => $_POST['noi_dung'],
            'ngay_dang' => date('Y-m-d H:i:s'),
        ];

        if ($_FILES['hinh_anh']['size'] !== 0) {
            $imgThumbnail = uploadImage($_FILES['hinh_anh']);

            if ($imgThumbnail) {
                $data['hinh_anh'] = $imgThumbnail;
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

    $tableName = 'tb_bai_viet';
    $post = showOne($tableName, $id);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $data = [
            'tieu_de' => $_POST['tieu_de'],
            'mo_ta' => $_POST['mo_ta'],
            'noi_dung' => $_POST['noi_dung'],
            'ngay_sua' => date('Y-m-d H:i:s'),
        ];

        if ($_FILES['hinh_anh']['size'] !== 0) {
            $imgThumbnail = uploadImage($_FILES['hinh_anh']);
            $data['hinh_anh'] = $imgThumbnail;
        }

        update($tableName, $id, $data);

        header('Location: ./?act=posts');
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

// function validatePostCreate($data)
// {
//     $errors = [];

//     // Validate title
//     if (empty($data['tieu_de'])) {
//         $errors[] = 'Vui lòng điền tiêu đề';
//     } elseif (is_array($data['tieu_de']) > 100) {
//         $errors[] = 'Mô tả bài viết phải nhỏ hơn 100 ký tự';
//     }

//     // Validate excrept
//     if (is_array($data['mo_ta']) > 300) {
//         $errors[] = 'Mô tả bài viết phải nhỏ hơn 300 ký tự';
//     }

//     // Validate content 
//     if (empty($data['noi_dung'])) {
//         $errors[] = 'Vui lòng điền nội dung bài viết';
//     }

//     // Validate img_thumbnail
//     if (empty($data['hinh_anh'])) {
//         $errors['hinh_anh'] = 'Vui lòng nhập hình ảnh';
//     } elseif (is_array($data['hinh_anh'])) {
//         $typeImage = ['image/jpeg', 'image/png', 'image/jpg'];

//         if ($data['hinh_anh']['size'] > 2 * 1024 * 1024) {
//             $errors[] = 'Hình ảnh phải nhỏ hơn 2MB';
//         } elseif (!in_array($data['hinh_anh']['type'], $typeImage)) {
//             $errors[] = 'Hình ảnh phải có định dạng jpeg, png, jpg';
//         }
//     }

//     if (!empty($errors)) {
//         $_SESSION['errors'] = $errors;
//         $_SESSION['data'] = $data;

//         header('Location: ' . BASE_URL_ADMIN . '?act=post-create');

//         exit();
//     }
// }

function postDelete($id)
{
    $post = showOne('tb_bai_viet', $id);

    if (empty($post)) {
        e404();
    }

    delete('tb_bai_viet', $id);

    if (!empty($post['hinh_anh']) && file_exists(PATH_UPLOADS . 'posts/' . $post['hinh_anh'])) {
        unlink(PATH_UPLOADS . 'posts/' . $post['hinh_anh']);
    }

    $_SESSION['success'] = 'Xóa thành công bài viết';

    header('Location: ' . BASE_URL_ADMIN . '?act=posts');
    exit();
}
