<?php
// Hàm hiển thị dữ liệu ra trang thanh toán
function orderIndex()
{
    // Kiểm tra xem giỏ hàng đã được khởi tạo trong session chưa
    if (isset($_SESSION["cart"])) {
        $cartItems = $_SESSION["cart"];
    }
    
    require_once PATH_VIEW . 'order.php';
}

// Hàm thêm dữ liệu đơn hàng
function addOrder()
{
    if (isset($_POST['addOrder'])) {
        $user_id = $_SESSION['user']['id'];

        $cartUser = getCartByUserID($user_id);

        $orderData = [
            'user_id' => $user_id,
            'user_name' => $_POST['user_name'],
            'user_email' => $_POST['user_email'],
            'user_phone' => $_POST['user_phone'],
            'user_address' => $_POST['user_address'],
            'total_bill' => $_POST['total_bill'],
            'status_delivery' => 0,
            'status_payment' => 0,
        ];

        if (!empty($cartUser)) {
            // Thêm thông tin người đặt và vào đơn hàng
            createOrder($orderData);

            // Xóa toàn bộ sản phẩm trong giỏ hàng
            remoteAllCartItem($cartUser['id']);

            // Xóa giỏ hàng (carts) của người dùng
            delete('carts', $cartUser['id']);

            // Xóa toàn bộ sản phẩm trong session
            unset($_SESSION['cart']);
        }
    }
}

// Hàm thêm sản phẩm vào bảng chi tiết đơn hàng
function createOrder($orderData)
{
    $order_id = insert_get_last_id('orders', $orderData);

    if ($order_id !== null) {
        $cartItems = $_SESSION["cart"];

        foreach ($cartItems as $item) {
            $product = showOne('products', $item["id"]);
            $priceProduct = $product['price_sale'] ?? $product['price_regular'];

            $newOrderItem = [
                "order_id" => $order_id,
                "product_id" => $item["id"],
                "quantity" => $item["quantity"],
                "price" => $priceProduct,
            ];

            insert('order_items', $newOrderItem);
        }

        echo "<script>alert('Đặt hàng thành công')</script>";
    }
}
