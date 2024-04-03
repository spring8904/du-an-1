<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= BASE_URL ?>imgs/logo/logo-pink.png" />
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/aside.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css" />

    <script src="js/index.js"></script>
    <script defer src="js/big_slideshow.js"></script>
</head>

<body>
    <!-- Header -->
    <?php include(PATH_VIEW . '/layouts/header.php') ?>

    <div class="container mt-4">
        <h2>Giỏ hàng của bạn</h2>

        <?php if (!empty($cartItems)) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Đoạn mã PHP để lặp qua sản phẩm trong giỏ hàng -->
                    <?php
                    $stt = 1;
                    $total = 0;
                    ?>
                    <?php foreach ($cartItems as $item) : ?>

                        <tr>
                            <td><?= $stt++ ?></td>
                            <td><img src="<?= BASE_URL . 'uploads/products/' . $item['product_image'] ?>" style="width: 100px;"></td>
                            <td><?= $item['product_name'] ?></td>
                            <td><?= number_format($item['product_price']) ?></td>
                            <td>
                                <a class="btn btn-light" href="<?= BASE_URL . '?act=updateQuantity&change=-1&id_sp=' . $item['id'] ?>" role="button">-</a>
                                <?= $item['quantity'] ?>
                                <a class="btn btn-light" href="<?= BASE_URL . '?act=updateQuantity&change=1&id_sp=' . $item['id'] ?>" role="button">+</a>
                            </td>
                            <?php
                            $subtotal = $item['product_price'] * $item['quantity'];
                            $total += $subtotal;
                            ?>
                            <td><?= number_format($subtotal) ?></td>
                            <td>
                                <!-- Đường dẫn để xóa sản phẩm khỏi giỏ hàng -->
                                <a href="<?= BASE_URL . '?act=remoteCartItem&id_sp=' . $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm trong giỏ hàng không?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-6">
                    <!-- Đường dẫn để xóa toàn bộ sản phẩm khỏi giỏ hàng -->
                    <a href="<?= BASE_URL . '?act=remoteCart' ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa tất cả sản phẩm trong giỏ hàng không?')">Xóa giỏ hàng</a>
                </div>
                <div class="col-md-6 text-right">
                    <h4>Tổng tiền: <?= number_format($total) ?></h4>
                    <div class="col-md-6">
                        <!-- Chọn phương thức thanh toán -->
                        <?php $paymentMethods = listAll('tb_phuong_thuc_thanh_toan'); ?>
                        <h4><label for="">Phương thức thanh toán:</label></h4>
                        <select class="form-control" name="payment_method">
                            <option value="">Chọn phương thức</option>
                            <?php foreach ($paymentMethods as $paymentMethod) : ?>
                                <option value="<?= $paymentMethod['id'] ?>"><?= $paymentMethod['ten_pttt'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <br>
                    <!-- Đường dẫn để thanh toán giỏ hàng -->
                    <a href="<?= BASE_URL . '?act=order' ?>" class="btn btn-primary">Thanh toán</a>
                </div>
            </div>

        <?php } else { ?>
            <div class="alert alert-dark">
                Bạn chưa có sản phẩm nào trong giỏ hàng!
            </div>
        <?php } ?>
    </div>
</body>

</html>