<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="<?= BASE_URL_ADMIN ?>?act=product-create">Thêm sản phẩm</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Danh mục</th>
              <th>Ngày nhập</th>
              <th>Số lượng</th>
              <th>Trạng thái</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Danh mục</th>
              <th>Ngày nhập</th>
              <th>Số lượng</th>
              <th>Trạng thái</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($products as $product) {
            ?>
              <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['ten_sp'] ?></td>
                <td><?= $product['gia_sp'] ?></td>
                <td><?= showOne('tb_danh_muc_sp', $product['id_dm'])['ten_dm'] ?></td>
                <td><?= $product['ngay_nhap'] ?></td>
                <td><?= $product['so_luong'] ?></td>
                <td>
                  <h5><span class="badge badge-<?= $product['trang_thai'] == 'show' ? 'success' : 'warning' ?>"><?= $product['trang_thai'] ?></span></h5>
                </td>
                <td>
                  <a href="<?= BASE_URL_ADMIN . '?act=product-detail&id=' . $product['id'] ?>" class="btn btn-info">Xem</a>
                  <a href="<?= BASE_URL_ADMIN . '?act=product-update&id=' . $product['id'] ?>" class="btn btn-warning">Sửa</a>
                  <a href="<?= BASE_URL_ADMIN . '?act=product-delete&id=' . $product['id']  ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?= $product['ten_sp'] ?>')">Xóa</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>