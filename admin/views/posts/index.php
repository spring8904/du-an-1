<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="<?= BASE_URL_ADMIN ?>?act=post-create">Thêm bài viết</a>
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Hình ảnh</th>
              <th>Tiêu đề bài viết</th>
              <th>Mô tả bài viết</th>
              <th>Người viết</th>
              <th>Avatar</th>
              <th>Ngày đăng</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($posts as $post) {
              
            ?>
              <tr>
                <td><?= $post['p_id'] ?></td>
                <td>
                  <img src="<?= BASE_URL . 'uploads/' . $post['p_img_thumbnail'] ?>" alt="<?= $post['p_title'] ?>" width="50">
                </td>
                <td><?= $post['p_title'] ?></td>
                <td><?= $post['p_excrept'] ?></td>
                <td><?= $post['us_name'] ?></td>
                <td><img src="<?= BASE_URL . 'uploads/' . $post['us_avatar'] ?>" alt="<?= $post['us_name'] ?>" width="50"></td>
                <td><?= $post['p_created_at'] ?></td>
                <td>
                  <a href="<?= BASE_URL_ADMIN . '?act=post-update&id=' . $post['p_id'] ?>" class="btn btn-warning">Sửa</a>
                  <a href="<?= BASE_URL_ADMIN . '?act=post-detail&id=' . $post['p_id'] ?>" class="btn btn-primary">Xem</a>
                  <a href="<?= BASE_URL_ADMIN . '?act=post-delete&id=' . $post['p_id']  ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết <?= $post['p_title'] ?>')">Xóa</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>