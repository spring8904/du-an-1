<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

  <?php if (isset($error)) { ?>
    <h2 class="alert alert-danger"><?= $error ?></h2>
  <?php } ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="<?= BASE_URL_ADMIN ?>?act=products">Quay trở lại</a>
      </h6>
    </div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md">

            <div class="mb-3">
              <label for="name" class="form-label">Tên sản phẩm:<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="name" name="ten_sp" required value="<?= $product['ten_sp'] ?>">
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Giá sản phẩm:<span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="price" name="gia_sp" required value="<?= $product['gia_sp'] ?>">
            </div>

            <div class="mb-3">
              <label for="quantity" class="form-label">Số lượng:<span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="quantity" name="so_luong" required value="<?= $product['so_luong'] ?>">
            </div>

            <div class="mb-3">
              <label class="form-label" for="category-id">Danh mục:<span class="text-danger">*</span></label>
              <select class="form-select" id="category-id" name="id_dm" required>
                <?php $category = showOne('tb_danh_muc_sp', $product['id_dm']) ?>
                <option selected hidden value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>
                <?php
                $categories = listAll('tb_danh_muc_sp');
                foreach ($categories as $category) {
                ?>
                  <option value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label" for="trang_thai">Trạng thái:<span class="text-danger">*</span></label>
              <select class="form-select" id="trang_thai" name="id_tt" required>
                <?php $status = showOne('tb_trang_thai', $product['id_tt']); ?>
                <option value="<?= $status['id'] ?>" selected hidden><?= $status['ten_tt'] ?></option>
                <option value="1">Hiện</option>
                <option value="2">Ẩn</option>
              </select>
            </div>
          </div>

          <div class="col-md">
            <div class="mb-3">
              <label class="form-label" for="date">Ngày nhập:<span class="text-danger">*</span></label>
              <input type="date" class="form-control" name="ngay_nhap" id="date" required value="<?= $product['ngay_nhap'] ?>">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Mô tả:</label>
              <textarea type="text" class="form-control" id="description" name="mo_ta" rows="2"><?= $product['mo_ta'] ?></textarea>
            </div>
            <label for="image" class="form-label">Hình ảnh:<span class="text-danger">*</span></label>
            <div class="mb-3 input-group">
              <input type="file" class="form-control" id="image" accept="image/*" onchange="loadFile(event)" name="hinh_anh[]" multiple>
              <label class="input-group-text" for="image">Tải lên</label>
            </div>
            <div class="text-center">
              <img id="output" width="200px" height="200px" <?= getImageProduct($product['id']) ? 'src="' . BASE_URL . 'uploads/' . getImageProduct($product['id'])['hinh_anh'] . '"'  : '' ?> />
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between mt-3">
          <a href="./?act=products" class="btn btn-secondary">Go back</a>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>