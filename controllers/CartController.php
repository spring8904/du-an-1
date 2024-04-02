<?php
// Hàm thêm sản phẩm vào giỏ hàng
function addToCart()
{
    if (isset($_GET["id_sp"])) {

        $productId = $_GET["id_sp"];

        // Nếu chưa có giỏ hàng SESSion thì tiến hành tạo
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = [];
        }

        // Thêm sản phẩm vào giỏ hàng trong session
        if (isset($_SESSION["cart"][$productId])) {
            // Nếu đã có sản phẩm trong giỏ hàng session thì + 1 vào số lượng
            $_SESSION["cart"][$productId]['quantity'] += 1;
        } else {
            // Nếu chưa cso thì thêm sản phẩm mới và để số lượng là 1
            $_SESSION["cart"][$productId] = [
                'id' => $productId,
                "quantity" => 1,
                'product_name' => $_GET["product_name"],
                'product_image' => $_GET["product_image"],
                'product_price' => $_GET["product_price"],
            ];
        }

        // Thêm sản phẩm vào giỏ hàng trong cơ sở dữ liệu
        $cartUser = getCartByUserID($_SESSION['user']['id']); // Lấy dữ liệu giỏ hàng của người dùng trong DB

        if (empty($cartUser)) {
            // Nếu ko có thì sẽ tạo giỏ hàng mới trong db và lấy ra id của giỏ hàng đấy
            $cart_id = insert_get_last_id('tb_gio_hang', ['id_nd' => $_SESSION['user']['id']]);
        } else {
            $cart_id = $cartUser['id'];
        }

        $productInCartItems = getProductInCartItem($cart_id); // Lấy ra sản phẩm có trong giỏ hàng của khách hàng
        if ($productInCartItems) {
            // Nếu sản phẩm đó đã có thì tiến hành cộng thêm số lượng
            $quantity = $productInCartItems['quantity'] + 1;
            updateQuantityCartItem($quantity, $cart_id);
        } else {
            if ($cart_id !== null) {
                $cartItemData = [
                    'id_gh' => $cart_id,
                    'id_sp' => $productId,
                    'so_luong' => 1
                ];
                insert('tb_muc_gh', $cartItemData);
            }
        }
    }

    header('Location: ' . BASE_URL);
    exit;
}

// Hàm hiển thị giỏ hàng
function cartIndex()
{
    // Kiểm tra xem giỏ hàng đã được khởi tạo trong session chưa
    if (isset($_SESSION["cart"])) {
        $cartItems = $_SESSION["cart"];
    }

    require_once PATH_VIEW . 'cart.php';
}

// Hàm cập nhật số lượng của sản phẩm trong giỏ hàng
function updateQuantity()
{
    if (isset($_GET['change']) && isset($_GET['id_sp'])) {
        $productId = $_GET["id_sp"];

        $change = $_GET['change'];

        // Lấy ra thông tin giỏ hàng của người dùng
        $cartUser = getCartByUserID($_SESSION['user']['id']);
        // Lấy ra sản phẩm người dùng có trong giỏ hàng
        $productInCartItems = getProductInCartItem($cartUser['id']);

        if ($productInCartItems) {
            $quantity = $productInCartItems['so_luong'] + $change; // Số lượng mới trong cơ sở dữ liệu
            $quantitySession = $_SESSION["cart"][$productId]['so_luong'] + $change; // Số lượng mới trong session

            // Kiểm tra nếu số lượng mới nhỏ hơn hoặc bằng 0, thì cập nhật lại thành 1
            if ($quantity <= 0 || $quantitySession <= 0) {
                $quantity = 1;
                $quantitySession = 1;
            }

            // Cập nhật số lượng trong cơ sở dữ liệu
            updateQuantityCartItem($quantity, $cartUser['id']);

            // Cập nhật số lượng trong session
            $_SESSION["cart"][$productId]['so_luong'] = $quantitySession;
        }

        header('Location: ' . BASE_URL . '?act=cart');
        exit;
    }
}

// Hàm xóa sản phẩm trong giỏ hàng
function remoteCartItem()
{
    if (isset($_GET["id_product"])) {
        // Lấy ra thông tin giỏ hàng của người dùng
        $cartUser = getCartByUserID($_SESSION['user']['id']);
        // Lấy ra sản phẩm người dùng có trong giỏ hàng
        $productInCartItems = getProductInCartItem($cartUser['id']);

        // Xóa sản phẩm có trong giỏ hàng
        delete('cart_items', $productInCartItems["id"]);

        // Xóa sản phẩm khỏi giỏ hàng trong session
        unset($_SESSION['cart'][$_GET["id_product"]]);

        header('Location: ' . BASE_URL . '?act=cart');
        exit;
    }
}

// Hàm xóa tất cả sản phẩm có trong giỏ hàng
function remoteAllCart()
{
    $cartUser = getCartByUserID($_SESSION['user']['id']);

    if ($cartUser) {
        // Xóa các sản phẩm trong giỏ hàng
        remoteAllCartItem($cartUser['id']);

        // Xóa giỏ hàng
        delete('carts', $cartUser['id']);

        // Xóa toàn bộ giỏ hàng trong session
        unset($_SESSION['cart']);
    }

    header('Location: ' . BASE_URL . '?act=cart');
    exit;
}
