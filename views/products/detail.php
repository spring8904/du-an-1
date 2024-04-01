<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="favicon.png" />
  <title><?= $product['ten_sp'] ?></title>

  <link rel="stylesheet" href="css/general.css" />
  <link rel="stylesheet" href="css/article.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/aside.css">
  <link rel="stylesheet" href="css/footer.css">

  <script defer src="js/article.js"></script>
</head>

<body>
  <!-- Header -->
  <?php include(PATH_VIEW . 'layouts/header.php') ?>

  <div id="main-container">
    <aside>
      <?php include PATH_VIEW . 'layouts/aside.php'; ?>
    </aside>
    <main>
      <section id="main-section">
        <div id="slideshow-container">
          <div id="slideshow-image-container">
            <img onclick="openZoomModal(event)" src="uploads/products/<?= $images[0]['hinh_anh'] ?>" alt="article image" />
          </div>

          <div id="slideshow-buttons-container">
            <label onclick="slideshowChangeImage(event);">
              <img class="slideshow-img" id="active-slideshow-button" src="uploads/products/<?= $images[0]['hinh_anh'] ?>" alt="error" />
            </label>

            <?php for ($i = 1; $i < count($images); $i++) : ?>
              <label onclick="slideshowChangeImage(event);">
                <img class="slideshow-img" src="uploads/products/<?= $images[$i]['hinh_anh']  ?>" />
              </label>
            <?php endfor ?>
          </div>
        </div>

        <div id="buy-container">
          <h1 id="article-title">
            <?= $product['ten_sp'] ?>
          </h1>

          <div class="buy-field" id="article-brand">
            <span class="label">danh mục:</span>
            <?php $category  = showOne('tb_danh_muc_sp', $product['id_dm']);
            if (!empty($category['hinh_anh'])) { ?>
              <img src="uploads/prCategories/<?= $category['hinh_anh'] ?>" />
            <?php } ?>
            <span><?= $category['ten_dm'] ?></span>
          </div>

          <?php if ($product['gia_km']) : ?>
            <div class="buy-field">
              <span class="label">giảm giá:</span>
              <span id="on-discount-per-span">
                -<?= ceil(($product['gia_km']) / ($product['gia_sp'])) ?>%
              </span>
            </div>
          <?php endif ?>

          <div class="buy-field" id="article-price">
            <span class="label">giá:</span>

            <?php if ($product['gia_km']) { ?>
              <span><?= $product['gia_km'] ?> VNĐ</span>
              <span id="old-price"><?= $product['gia_sp'] ?> VNĐ</span>
            <?php } else {  ?>
              <span><?= $product['gia_sp'] ?> VNĐ</span>
            <?php } ?>
          </div>

          <div class="buy-field" id="article-stock-<?= ($product['so_luong'] ? 'yes' : 'no') ?>">
            <span class="label">
              <?=
              $product['so_luong']
                ? "Còn -  {$product['so_luong']}  sản phẩm"
                : 'Hết hàng'
              ?>
            </span>
          </div>

          <div class="buy-field" id="article-rating">
            <span class="label">Đánh giá:</span>
            <div class="article-rating-container">
              <span class="article-back-stars">☆☆☆☆☆</span>
              <span class="article-front-stars" style="width:<?= 0 ?>%">★★★★★</span>
            </div>
            <span>(<?= 0 ?>% - <?= 0 ?> đánh giá)</span>
          </div>

          <div id=" add-to-cart-container">
            <div class="buy-field">
              <span class="label">Số lượng:</span>
              <input type="number" id="add-to-cart-input" value="1" min="1" max="<?= $product['so_luong'] ?>">
            </div>

            <button article_id="<?= $product['id'] ?>" id="add-to-cart-button" <?= $product['so_luong'] ? '' : 'disabled' ?>>
              <img src="imgs/shopping-cart.png" />
              <span>Thêm vào giỏ hàng</span>
            </button>
          </div>
        </div>
      </section>
      <section class="detail-section">
        <h2>Mô tả</h2>
        <p>
          <?= $product['mo_ta'] ?>
        </p>
      </section>
    </main>
  </div>

  <div id="zoom-modal" onclick="closeZoomModal(event)">
    <div id="zoom-modal-container">
      <img id="zoom-modal-img" src="" alt="image error">

      <button class="zoom-btn" id="zoom-close-btn">X</button>
      <button class="zoom-btn" id="zoom-next-btn" onclick="switchZoomImg(+1)">❯</button>
      <button class="zoom-btn" id="zoom-previous-btn" onclick="switchZoomImg(-1)">❮</button>
    </div>
  </div>

  <!-- Footer -->
  <?php include(PATH_VIEW . 'layouts/footer.php') ?>
</body>

</html>