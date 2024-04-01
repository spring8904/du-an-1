<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <?php if (isset($_SESSION['success'])) { ?>
    <p class="alert alert-success"><?= $_SESSION['success'] ?></p>
  <?php } ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">
        <a href="<?= BASE_URL_ADMIN ?>?act=orders">Quay trở lại</a>
        <a href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>">Cập nhật trạng thái</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Trường dữ liệu</th>
              <th>Dữ liệu</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mã đơn hàng</td>
              <td><?= $order['ma_dh'] ?></td>
            </tr>
            <tr>
              <td>Ngày đặt</td>
              <td><?= $order['ngay_dat'] ?></td>
            </tr>
            <tr>
              <td>Tên người đặt</td>
              <td><?= $user['ho_ten'] ?></td>
            </tr>
            <tr>
              <td>Email người đặt</td>
              <td><?= $user['email'] ?></td>
            </tr>
            <tr>
              <td>Ngày đặt</td>
              <td><?= formatDate($order['ngay_dat']) ?></td>
            </tr>
            <tr>
              <td>Phương thức thanh toán</td>
              <td><?= getPaymentMethod($order['id_pttt']) ?></td>
            </tr>
            <tr>
              <td>Ghi chú</td>
              <td><?= $order['ghi_chu'] ?></td>
            </tr>
            <tr>
              <td>Trạng thái</td>
              <td>
                <h5><span class="badge badge-<?= $status['badge'] ?? 'secondary' ?>"><?= $status['ten_tt'] ?></span></h5>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">
        Chi tiết giỏ hàng
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>STT</th>
              <th>Hình ảnh</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Thành tiền</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $stt = 1;
            $tongTien = 0;
            foreach ($orderDetails as $orderDetail) {
              $product = showOne('tb_san_pham', $orderDetail['id_sp']);
            ?>
              <tr>

                <td><?= $stt++ ?></td>
                <td>
                  <?php if (getProductImage($product['id'])) { ?>
                    <img src="<?= BASE_URL . 'uploads/products/' . getProductImage($product['id'])['hinh_anh'] ?>" alt="<?= $product['ten_sp'] ?>" width="50">
                  <?php } ?>
                </td>
                <td><?= $product['ten_sp'] ?></td>
                <td><?= $orderDetail['so_luong'] ?></td>
                <td><?= number_format($product['gia_sp'] * $orderDetail['so_luong']) ?> VNĐ</td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <h5 class="d-flex justify-content-between align-items-center">
        <span>Tổng tiền:</span>
        <span class="text-danger fw-bold"><?= getTotalMoney($order['id']) ?> VNĐ</span>
      </h5>
    </div>
  </div>
</div>