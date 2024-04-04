<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= BASE_URL ?>imgs/logo/logo-pink.png" />
  <title>Mã khuyến mãi</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontawesome-6-pro@6.4.0/css/all.min.css" integrity="sha256-R6pa/zpbhz9IjJIAXKP/0Kk53cRwfsjdik4Ojf9lOrQ=" crossorigin="anonymous">

  <!-- Custom fonts for this template-->
  <link href="<?= BASE_URL ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= BASE_URL ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/general.css" />
  <link rel="stylesheet" href="css/aside.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <!-- Header -->
  <?php include(PATH_VIEW . '/layouts/header.php') ?>

  <main class="mb-5 mt-3 container">
    <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Tổng hợp mã khuyến mãi</h1>

      <?php if (isset($_SESSION['success'])) { ?>
        <p class="alert alert-success"><?= $_SESSION['success'] ?></p>
      <?php } ?>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên khuyến mãi</th>
                  <th>Mã khuyến mãi</th>
                  <th>Giảm giá</th>
                  <th>Ngày kết thúc</th>
                  <th>Trạng thái</th>
                  <th></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>STT</th>
                  <th>Tên khuyến mãi</th>
                  <th>Mã khuyến mãi</th>
                  <th>Giảm giá</th>
                  <th>Ngày kết thúc</th>
                  <th>Trạng thái</th>
                  <th></th>
                </tr>
              </tfoot>
              <tbody>
                <?php $stt = 1;
                foreach ($promotions as $promotion) {
                  if ($promotion['ngay_ket_thuc'] < date('Y-m-d')) {
                    continue;
                  }
                ?>
                  <tr>
                    <td><?= $stt++ ?></td>
                    <td><?= $promotion['ten_km'] ?></td>
                    <td><?= $promotion['ma_km'] ?></td>
                    <td><?= $promotion['giam_gia'] ?>%</td>
                    <td><?= $promotion['ngay_ket_thuc'] ?></td>
                    <td>
                      <h5><?= getStatusPromotion($promotion['id']) ?></h5>
                    </td>

                    <td>
                      <button class="btn btn-info" onclick="copyToClipboard('<?= $promotion['ma_km'] ?>')">Copy</button>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include(PATH_VIEW . 'layouts/footer.php') ?>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASE_URL ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= BASE_URL ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= BASE_URL ?>assets/admin/js/demo/datatables-demo.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });

    function copyToClipboard(text) {
      var tempInput = document.createElement('input');
      tempInput.value = text;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand('copy');
      document.body.removeChild(tempInput);
      alert('Đã copy mã khuyến mãi ' + text + ' vào clipboard');
    }
  </script>
</body>

</html>