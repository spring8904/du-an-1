<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?= BASE_URL ?>imgs/logo/logo-pink.png" />
  <title>Thanks</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/general.css" />
  <link rel="stylesheet" href="css/aside.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/index.css" />

  <script src="js/index.js"></script>
</head>

<body>
  <!-- Header -->
  <?php include(PATH_VIEW . 'layouts/header.php') ?>

  <main>
    <div id="main-container">
      <aside>
        <?php include PATH_VIEW . 'layouts/aside.php' ?>
      </aside>
      <div id="main-content">
        <section style="min-height: 789px;">
          <div class="text-center">
            <h2 class="my-5">Đơn hàng đã được đặt thành công</h2>
            <a class="btn btn-primary" href="<?= BASE_URL ?>?act=myOrder">Xem đơn hàng</a>
            <a class="btn btn-secondary" href="<?= BASE_URL ?>">Về trang chủ</a>
          </div>
        </section>
        <!-- galaxy s9 special offer -->
        <section id="s9-special-offer" class="special-offer">
          <div class="special-offer-img">
            <img src="imgs/special_offers/s9_special_offer.png" alt="">
          </div>
          <div class="special-offer-text">
            <h1>Galaxy S9</h1>
            <p>
              With a camera that works like your eye.
            </p>
            <a href="#" class="styled-btn">
              ORDER NOW
            </a>
          </div>
        </section>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include(PATH_VIEW . 'layouts/footer.php') ?>
</body>

</html>