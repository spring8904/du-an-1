<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary d-flex justify-content-between">
        <a href="<?= BASE_URL_ADMIN ?>?act=products">Quay trở lại</a>
        <a href="<?= BASE_URL_ADMIN ?>?act=product-update&id=<?= $product['id'] ?>">Sửa thông tin</a>
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
          <tfoot>
            <tr>
              <th>Trường dữ liệu</th>
              <th>Dữ liệu</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>ID</td>
              <td><?= $product['id'] ?></td>
            </tr>
            <tr>
              <td>Tên sản phẩm</td>
              <td><?= $product['ten_sp'] ?></td>
            </tr>
            <tr>
              <td>Giá sản phẩm</td>
              <td><?= $product['gia_sp'] ?></td>
            </tr>
            <tr>
              <td>Danh mục</td>
              <td><?= showOne('tb_danh_muc_sp', $product['id_dm'])['ten_dm'] ?></td>
            </tr>
            <tr>
              <td>Mô tả</td>
              <td><?= $product['mo_ta'] ?></td>
            </tr>
            <tr>
              <td>Ngày nhập</td>
              <td><?= formatDate($product['ngay_nhap']) ?></td>
            </tr>
            <tr>
              <td>Số lượng</td>
              <td><?= $product['so_luong'] ?></td>
            </tr>
            <tr>
              <td>Trạng thái</td>
              <td>
                <h5><span class="badge badge-<?= $product['trang_thai'] == 'show' ? 'success' : 'warning' ?>"><?= $product['trang_thai'] ?></span></h5>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>