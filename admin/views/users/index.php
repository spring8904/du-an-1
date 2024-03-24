<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="<?= BASE_URL_ADMIN ?>?act=user-create">Thêm người dùng</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Avatar</th>
              <th>Email</th>
              <th>Họ Tên</th>
              <th>Chức vụ</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Avatar</th>
              <th>Email</th>
              <th>Họ Tên</th>
              <th>Chức vụ</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($users as $user) {
              $role = showOne('tb_chuc_vu', $user['id_cv'])['chuc_vu'];
            ?>
              <tr>
                <td><?= $user['id'] ?></td>
                <td><img src="<?= BASE_URL . 'uploads/' . $user['avatar'] ?>" alt="<?= $user['ho_ten'] ?>" width="50"></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['ho_ten'] ?></td>
                <td>
                  <h5><span class="badge badge-<?= $role == 'admin' ? 'success' : 'warning' ?>"><?= $role ?></span></h5>
                </td>
                <td>
                  <a href="<?= BASE_URL_ADMIN . '?act=user-detail&id=' . $user['id'] ?>" class="btn btn-info">Xem</a>
                  <?php if ($role != 'admin') { ?>
                    <a href="<?= BASE_URL_ADMIN . '?act=user-update&id=' . $user['id'] ?>" class="btn btn-warning">Sửa</a>
                    <a href="<?= BASE_URL_ADMIN . '?act=user-delete&id=' . $user['id']  ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng <?= $user['email'] ?>')">Xóa</a>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>