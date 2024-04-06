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
    $user_id = $_SESSION['user']['id'];

    if (isset($_POST['addOrder'])) {

        $err = orderValidate();

        if (!empty($err)) {
            $_SESSION['error'] = $err;
            header('location: ' . BASE_URL . '?act=order');
            die;
        }

        $orderData = [
            'ma_dh' => time() . rand(1000, 9999),
            'id_nd' => $user_id,
            'id_pttt' => 1,
            'id_tt' => 3,
            'ma_km' => $_SESSION['promotion']['ma_km'] ?? '',
            'tong_tien' => $_POST['total_bill'],
            'ho_ten' => $_POST['ho_ten'],
            'email' => $_POST['email'],
            'so_dien_thoai' => $_POST['so_dien_thoai'],
            'dia_chi' => $_POST['dia_chi'],
            'ghi_chu' => $_POST['ghi_chu'] ?? '',
        ];

        // Thêm thông tin người đặt và vào đơn hàng
        createOrder($orderData);
        header('location: ' . BASE_URL . '?act=thanks&check=true');
    }

    if (isset($_POST['vnpay'])) {
        $err = orderValidate();

        if (!empty($err)) {
            $_SESSION['error'] = $err;
            header('location: ' . BASE_URL . '?act=order');
            die;
        }

        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $orderData = [
            'ma_dh' => time() . rand(1000, 9999),
            'id_nd' => $user_id,
            'id_pttt' => 1,
            'id_tt' => 3,
            'ma_km' => $_SESSION['promotion']['ma_km'] ?? '',
            'tong_tien' => $_POST['total_bill'],
            'ho_ten' => $_POST['ho_ten'],
            'email' => $_POST['email'],
            'so_dien_thoai' => $_POST['so_dien_thoai'],
            'dia_chi' => $_POST['dia_chi'],
            'ghi_chu' => $_POST['ghi_chu'] ?? '',
        ];
        $dataUrl = '';

        foreach ($orderData as $key => $value) {
            $dataUrl .= '&' . $key . '=' . $value;
        }

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl =  BASE_URL . '?act=thanks&check=true' . $dataUrl;
        $vnp_TmnCode = "CGXZLS0Z"; //Mã website tại VNPAY 
        $vnp_HashSecret = "XNBCJFAKAZQSGTARRLGCHVZWCIOIGSHN"; //Chuỗi bí mật

        $vnp_TxnRef = time() . rand(1000, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Thanh toán đơn hàng ' . $vnp_TxnRef;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $_POST['total_bill'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
        //$vnp_ExpireDate = $_POST['txtexpire'];
        //Billing
        // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
        // $vnp_Bill_Email = $_POST['txt_billing_email'];
        // $fullName = trim($_POST['txt_billing_fullname']);
        // if (isset($fullName) && trim($fullName) != '') {
        //     $name = explode(' ', $fullName);
        //     $vnp_Bill_FirstName = array_shift($name);
        //     $vnp_Bill_LastName = array_pop($name);
        // }
        // $vnp_Bill_Address = $_POST['txt_inv_addr1'];
        // $vnp_Bill_City = $_POST['txt_bill_city'];
        // $vnp_Bill_Country = $_POST['txt_bill_country'];
        // $vnp_Bill_State = $_POST['txt_bill_state'];
        // // Invoice
        // $vnp_Inv_Phone = $_POST['txt_inv_mobile'];
        // $vnp_Inv_Email = $_POST['txt_inv_email'];
        // $vnp_Inv_Customer = $_POST['txt_inv_customer'];
        // $vnp_Inv_Address = $_POST['txt_inv_addr1'];
        // $vnp_Inv_Company = $_POST['txt_inv_company'];
        // $vnp_Inv_Taxcode = $_POST['txt_inv_taxcode'];
        // $vnp_Inv_Type = $_POST['cbo_inv_type'];
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef

            // "vnp_ExpireDate" => $vnp_ExpireDate,
            // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
            // "vnp_Bill_Email" => $vnp_Bill_Email,
            // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
            // "vnp_Bill_LastName" => $vnp_Bill_LastName,
            // "vnp_Bill_Address" => $vnp_Bill_Address,
            // "vnp_Bill_City" => $vnp_Bill_City,
            // "vnp_Bill_Country" => $vnp_Bill_Country,
            // "vnp_Inv_Phone" => $vnp_Inv_Phone,
            // "vnp_Inv_Email" => $vnp_Inv_Email,
            // "vnp_Inv_Customer" => $vnp_Inv_Customer,
            // "vnp_Inv_Address" => $vnp_Inv_Address,
            // "vnp_Inv_Company" => $vnp_Inv_Company,
            // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
            // "vnp_Inv_Type" => $vnp_Inv_Type
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['vnpay'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo

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
            update('tb_san_pham', $item["id"], ['so_luong' => $product['so_luong'] - $item["quantity"]]);
        }
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

function orderUpdateClient($id, $id_tt)
{
    $order = showOne('tb_don_hang', $id);

    if (empty($order)) {
        echo "<script>alert('Đơn hàng không tồn tại')</script>";
        header('location: ' . BASE_URL . '?act=myOrder');
        exit();
    }

    if (empty($id_tt) || $id_tt != 6 && $id_tt != 7) {
        echo "<script>alert('Trạng thái không hợp lệ')</script>";
        header('location: ' . BASE_URL . '?act=myOrder');
        exit();
    }

    $orderData = [
        'id_tt' => $id_tt,
    ];

    update('tb_don_hang', $id, $orderData);
    if ($id_tt == 7) {
        $orderDetails = showAllDetailOrrder($id);
        foreach ($orderDetails as $orderDetail) {
            $product = showOne('tb_san_pham', $orderDetail['id_sp']);
            update('tb_san_pham', $orderDetail['id_sp'], ['so_luong' => $product['so_luong'] + $orderDetail['so_luong']]);
        }
    }

    header('location: ' . BASE_URL . '?act=myOrder');
}

function thanksIndex()
{
    if (
        $_GET['check'] == 'true'
        && isset($_SESSION['cart'])
    ) {
        if (
            isset($_GET['vnp_ResponseCode'])
            && $_GET['vnp_ResponseCode'] === '00'
            && isset($_GET['vnp_TransactionStatus'])
            && $_GET['vnp_TransactionStatus'] === '00'
        ) {
            $orderData = [
                'ma_dh' => $_GET['vnp_TxnRef'],
                'id_nd' => $_GET['id_nd'],
                'id_pttt' => 2,
                'id_tt' => 3,
                'ma_km' => $_GET['ma_km'] ?? '',
                'tong_tien' => $_GET['tong_tien'],
                'ho_ten' => $_GET['ho_ten'],
                'email' => $_GET['email'],
                'so_dien_thoai' => $_GET['so_dien_thoai'],
                'dia_chi' => $_GET['dia_chi'],
                'ghi_chu' => $_GET['ghi_chu'] ?? '',
            ];
            createOrder($orderData);
            require_once PATH_VIEW . 'thanks.php';
        } else if (
            !isset($_GET['vnp_ResponseCode'])
            || !isset($_GET['vnp_TransactionStatus'])
        ) {
            require_once PATH_VIEW . 'thanks.php';
        } else {
            header('location: ' . BASE_URL . '?act=cart');
            exit();
        }
        unset($_SESSION['cart']);
        unset($_SESSION['promotion']);
    } else {
        header('location: ' . BASE_URL);
    }
}
