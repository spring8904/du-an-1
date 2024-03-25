<?php

// Khai báo các hàm dùng Global
if (!function_exists('require_file')) {
    function require_file($pathFolder)
    {
        $files = array_diff(scandir($pathFolder), ['.', '..']);

        foreach ($files as $file) {
            require_once $pathFolder . $file;
        }
    }
}

if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        $view = '404';
        require_once PATH_VIEW_ADMIN . 'layouts/master.php';
        die;
    }
}

if (!function_exists('middleware_auth_check')) {
    function middleware_auth_check($act, $arrRouteNeedAuth)
    {
        if ($act == 'login') {
            if (!empty($_SESSION['user'])) {
                header('Location: ' . BASE_URL);
                exit();
            }
        } elseif (empty($_SESSION['user']) && in_array($act, $arrRouteNeedAuth)) {
            header('Location: ' . BASE_URL . '?act=login');
            exit();
        }
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage($file)
    {
        $targetDir = PATH_UPLOADS;
        $targetFile = basename($file['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $newFileName = uniqid() . '.' . $imageFileType;
        $newTargetFile = $targetDir . $newFileName;
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (!in_array($imageFileType, $allowTypes)) {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            return false;
        } else {
            move_uploaded_file($file['tmp_name'], $newTargetFile);
            return $newFileName;
        }
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        return date('d/m/Y', strtotime($date));
    }
}
