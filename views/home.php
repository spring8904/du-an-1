  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?= BASE_URL ?>imgs/logo/logo-pink.png" />
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/aside.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css" />

    <script src="js/index.js"></script>
    <script defer src="js/big_slideshow.js"></script>
  </head>

  <body>
    <!-- Header -->
    <?php include(PATH_VIEW . '/layouts/header.php') ?>
    <main>
      <!-- slide show -->
      <div class="big-slideshow-container">
        <div class="big-slideshow-slides-container" data-current-slide="0">
          <!-- Slide 1 -->
          <div class="big-slideshow-slide bs-reverse">
            <img class="big-slideshow-bg-img" src="imgs/banner/1.jpg" loading="lazy">
          </div>
          <!-- Slide 2 -->
          <div class="big-slideshow-slide">
            <img class="big-slideshow-bg-img" src="imgs/banner/2.png" loading="lazy">
          </div>
        </div>
        <div class="big-slideshow-buttons-container">
          <button data-slide="1" style="background-color: var(--color-2)"></button>
          <button data-slide="2"></button>
        </div>
        <button class="big-slideshow-previous-slide" onclick="swipeSlideBS(event,-1)">❮</button>
        <button class="big-slideshow-next-slide" onclick="swipeSlideBS(event,1)">❯</button>
      </div>

      <div id="main-container">
        <aside>
          <?php include PATH_VIEW . '/layouts/aside.php' ?>
        </aside>
        <div id="main-content">
          <!-- trending/discount/new -->
          <section class="main">
            <div class="section-header">
              <button class="change-btn" id="change-btn-active" data="trending" onclick="changeFrom(event)" disabled>
                Xu hướng
              </button>
              <button class="change-btn" data="on-discount" onclick="changeFrom(event)">
                Đang giảm giá
              </button>
            </div>

            <div id="trending" class="fadein-article-container" style="display: block;">
              <?php
              foreach ($products as $product) { ?>
                <div class="article">
                  <a href="?act=product&id=<?= $product['id'] ?>">

                    <?php if ($product['gia_km']) { ?>
                      <span class="discount-span">-<?= ceil(($product['gia_km']) / ($product['gia_sp'])) ?>%</span>
                    <?php } ?>

                    <img src="uploads/products/<?= getProductImage($product['id'])['hinh_anh'] ?>" />

                    <div class="article-brand">
                      <span class="label">Danh mục:</span>
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
                      <span class="front-stars" <?= 'style="width:' . getAverageRating($product['id']) * 100 / 5 . '%"' ?>>★★★★★</span>
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

            <div id="on-discount" class="fadein-article-container">
              <?php
              foreach ($products as $product) {
                if ($product['gia_km'] && ($product['gia_km']) != 0) { ?>
                  <div class="article">
                    <a href="?act=product&id=<?= $product['id'] ?>">

                      <?php if ($product['gia_km']) { ?>
                        <span class="discount-span">-<?= ceil(($product['gia_km']) / ($product['gia_sp'])) ?>%</span>
                      <?php } ?>

                      <img src="uploads/products/<?= getProductImage($product['id'])['hinh_anh'] ?>" />

                      <div class="article-brand">
                        <span class="label">Danh mục:</span>
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
                        <span class="front-stars" <?= 'style="width:' . getAverageRating($product['id']) * 100 / 5 . '%"' ?>>★★★★★</span>
                      </div>
                    </a>
                    <?php if ($product['so_luong'] > 0) { ?>
                      <button article_id="<?= $product['id'] ?>" class="article-add-to-cart-btn">
                        <span>Thêm vào giỏ hàng</span>
                        <img src="imgs/shopping-cart.png" />
                      </button>
                    <?php } ?>
                  </div>
              <?php }
              } ?>
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
              <img src="imgs/special_offers/airpods_special_offer.png" alt="">
            </div>
          </section>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <?php include(PATH_VIEW . '/layouts/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  </html>