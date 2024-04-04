<?php
// Hàm hiển thị dữ liệu ra trang thanh toán
function orderIndex()
{
    // Kiểm tra xem giỏ hàng đã được khởi tạo trong session chưa
    if (isset($_SESSION["cart"])) {
        $cartItems = $_SESSION["cart"];
        addPromotion();
    } else {
        header('location: ' . BASE_URL . '?act=cart');
    }

    require_once PATH_VIEW . 'order.php';
    unset($_SESSION['error']);
    unset($_SESSION['success']);
}

// Hàm thêm dữ liệu đơn hàng
function addOrder()
{
    if (isset($_POST['addOrder'])) {

        $err = orderValidate();

        if (!empty($err)) {
            $_SESSION['error'] = $err;
            header('location: ' . BASE_URL . '?act=order');
            die;
        }

        $user_id = $_SESSION['user']['id'];

        $orderData = [
            'ma_dh' => 'DH' . time(),
            'id_nd' => $user_id,
            'id_pttt' => $_POST['id_pttt'],
            'id_tt' => 3,
            'tong_tien' => $_POST['total_bill'],
            'ho_ten' => $_POST['ho_ten'],
            'email' => $_POST['email'],
            'so_dien_thoai' => $_POST['so_dien_thoai'],
            'dia_chi' => $_POST['dia_chi'],
            'ghi_chu' => $_POST['ghi_chu'] ?? '',
        ];

        // Thêm thông tin người đặt và vào đơn hàng
        createOrder($orderData);

        // Xóa toàn bộ sản phẩm trong session
        unset($_SESSION['cart']);

        unset($_SESSION['promotion']);

        header('location: ' . BASE_URL . '?act=myOrder');
    }
}

// Hàm thêm sản phẩm vào bảng chi tiết đơn hàng
function createOrder($orderData)
{
    $order_id = insert_get_last_id('tb_don_hang', $orderData);

    if ($order_id !== null) {
        $cartItems = $_SESSION["cart"];

        foreach ($cartItems as $item) {
            $product = showOne('tb_san_pham', $item["id"]);
            $priceProduct = $product['gia_km'] != 0 ? $product['gia_km'] : $product['gia_sp'];

            $newOrderItem = [
                "id_dh" => $order_id,
                "id_sp" => $item["id"],
                "so_luong" => $item["quantity"],
                "gia" => $priceProduct,
            ];

            insert('tb_chi_tiet_dh', $newOrderItem);
        }

        echo "<script>alert('Đặt hàng thành công')</script>";
    }
}

function addPromotion()
{
    if (isset($_POST['ma_km'])) {
        $promotion = checkPromotionCode($_POST['ma_km']);
        if ($promotion && $promotion['ngay_ket_thuc'] >= date('Y-m-d') && $promotion['ngay_bat_dau'] <= date('Y-m-d')) {
            $_SESSION['sussecc'] = ['Áp dụng mã khuyến mãi thành công'];
            $_SESSION['promotion'] = $promotion;
        } else {
            $_SESSION['error'] = ['Mã khuyến mãi không hợp lệ'];
        }
    }
}

function orderValidate()
{
    $err = [];

    if (empty($_POST['ho_ten'])) {
        $err[] = 'Vui lòng nhập họ tên';
    }

    if (empty($_POST['email'])) {
        $err[] = 'Vui lòng nhập email';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $err[] = 'Email không hợp lệ';
    }

    if (empty($_POST['so_dien_thoai'])) {
        $err[] = 'Vui lòng nhập số điện thoại';
    } elseif (!preg_match('/^[0-9]{10}$/', $_POST['so_dien_thoai'])) {
        $err[] = 'Số điện thoại không hợp lệ';
    }

    if (empty($_POST['dia_chi'])) {
        $err[] = 'Vui lòng nhập địa chỉ';
    }

    if (empty($_POST['id_pttt'])) {
        $err[] = 'Vui lòng chọn phương thức thanh toán';
    }

    return $err;
}

function myOrderIndex()
{
    $user_id = $_SESSION['user']['id'];
    $orders = getOrderByUserID($user_id);

    require_once PATH_VIEW . 'my-order.php';
}

function orderDetailIndex($id)
{
    $order = showOne('tb_don_hang', $id);

    if (empty($order)) {
        echo "<script>alert('Đơn hàng không tồn tại')</script>";
        header('location: ' . BASE_URL . '?act=myOrder');
    }

    $orderDetails = showAllDetailOrrder($id);
    $status = showOne('tb_trang_thai', $order['id_tt']);
    $title = 'Chi tiết đơn hàng ' . $order['ma_dh'];
    require_once PATH_VIEW . 'order-detail.php';
}
