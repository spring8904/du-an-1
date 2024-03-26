<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Họ tên Khách hàng</th>
              <th>Số điện thoại</th>
              <th>Nội dung</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($contacts as $contact) { ?>
              <tr>
                <td><?= $contact['id'] ?></td>
                <td><?= $contact['ten_kh'] ?></td>
                <td><?= $contact['so_dien_thoai'] ?></td>
                <td><?= $contact['noi_dung'] ?></td>
                <td>
                  <a href="<?= BASE_URL_ADMIN . '?act=contact-detail&id=' . $contact['id'] ?>" class="btn btn-info">Xem</a>
                  <a href="<?= BASE_URL_ADMIN . '?act=contact-delete&id=' . $contact['id']  ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa Khách hàng <?= $contact['so_dien_thoai'] ?>')">Xóa</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>