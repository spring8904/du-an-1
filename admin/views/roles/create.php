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
        <a href="<?= BASE_URL_ADMIN ?>?act=roles">Quay trở lại</a>
      </h6>
    </div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="role" class="form-label">Tên chức vụ:<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="role" name="chuc_vu" required autofocus>
        </div>
        <div class="d-flex justify-content-between mt-3">
          <div>
            <a href="<?= BASE_URL_ADMIN ?>?act=roles" class=" btn btn-secondary">Go back</a>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>