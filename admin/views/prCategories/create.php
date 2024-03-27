<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <?php if (isset($_SESSION['error'])) {
    foreach ($_SESSION['error'] as $error) { ?>
      <p class="alert alert-danger"><?= $error ?></p>
  <?php }
  } ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="<?= BASE_URL_ADMIN ?>?act=prCategories">Quay trở lại</a>
      </h6>
    </div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data" novalidate>
        <div class="mb-3">
          <label for="name" class="form-label">Tên danh mục sản phẩm:<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="ten_dm" required autofocus>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Mô tả:</label>
          <input type="text" class="form-control" id="description" name="mo_ta">
        </div>
        <label for="image" class="form-label">Hình ảnh:</label>
        <div class="mb-3 input-group">
          <input type="file" class="form-control" id="image" accept="image/*" onchange="loadFile(event)" name="hinh_anh">
          <label class="input-group-text" for="image">Tải lên</label>
        </div>
        <div class="text-center">
          <img id="output" width="200px" height="200px" />
        </div>
        <div class="d-flex justify-content-between mt-3">
          <div>
            <a href="<?= BASE_URL_ADMIN ?>?act=prCategories" class=" btn btn-secondary">Quay trở lại</a>
            <button type="reset" class="btn btn-danger">Đặt lại</button>
          </div>
          <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
      </form>
    </div>
  </div>
</div>