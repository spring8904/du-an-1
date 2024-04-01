<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png" />
  <!-- <title>RTECH For Tech Materials</title> -->

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
          <div class="section-header">
            <h1 class="specific-section-header">
              <?= $header_text ?>
            </h1>
          </div>
          <div>
            <?php
            foreach ($products as $product) { ?>
              <div class="article">
                <a href="?act=product&id=<?= $product['id'] ?>">

                  <?php if ($product['gia_km']) { ?>
                    <span class="discount-span">-<?= round(($product['gia_km']) / ($product['gia_sp'])) ?>%</span>
                  <?php } ?>

                  <img src="uploads/products/<?= getProductImage($product['id'])['hinh_anh'] ?>" />

                  <div class="article-brand">
                    <span class="label">danh mục:</span>
                    <?php $category  = showOne('tb_danh_muc_sp', $product['id_dm']);
                    if (!empty($category['hinh_anh'])) { ?>
                      <img src="uploads/prCategories/<?= $category['hinh_anh'] ?>" />
                    <?php } ?>
                    <span><?= $category['ten_dm'] ?></span>
                  </div>

                  <span class="article-title">
                    <?= $product['ten_sp'] ?>
                  </span>

                  <?php if (!$product['gia_km']) { ?>
                    <span class="article-price"><?= number_format($product['gia_sp']) ?> VNĐ</span>
                  <?php } else { ?>
                    <span class="article-price"><?= number_format($product['gia_km']) ?> VNĐ
                      <span class="article-old-price"><?= number_format($product['gia_sp']) ?> VNĐ</span>
                    </span>
                  <?php } ?>

                  <div class="rating-container">
                    <span class="back-stars">☆☆☆☆☆</span>
                    <span class="front-stars" <?= 'style="width:' . 0 . '%"' ?>>★★★★★</span>
                  </div>
                </a>
                <?php if ($product['so_luong'] > 0) { ?>
                  <button article_id="<?= $product['id'] ?>" class="article-add-to-cart-btn">
                    <span>Thêm vào giỏ hàng</span>
                    <img src="imgs/shopping-cart.png" />
                  </button>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </section>
        <!-- galaxy s9 special offer -->
        <section id="s9-special-offer" class="special-offer">
          <div class="special-offer-img">
            <img src="img/special_offers/s9_special_offer.png" alt="">
          </div>
          <div class="special-offer-text">
            <h1>Galaxy S9</h1>
            <p>
              With a camera that works like your eye.
            </p>
            <a href="article?article_id=51" class="styled-btn">
              ORDER NOW
            </a>
          </div>
        </section>
        <!-- airpods special offer -->
        <section id="airpods-special-offer" class="special-offer">
          <div class="special-offer-text">
            <h1>AirPods Pro</h1>
            <p>
              AirPods deliver effortless, all-day audio on the go.
            </p>
            <a href="article?article_id=1" class="styled-btn">
              ORDER NOW
            </a>
          </div>
          <div class="special-offer-img">
            <img src="img/special_offers/airpods_special_offer.png" alt="">
          </div>
        </section>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <?php include(PATH_VIEW . 'layouts/footer.php') ?>
</body>

</html>