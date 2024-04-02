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

        <section class="ftco-section contact-section ftco-degree-bg">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Thông tin liên hệ:</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3">
                        <p><span>Địa chỉ:</span> Số 5, Ngách 193/220 Đường Phú Diễn, Phường Phú Diễn</p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Số điện thoại:</span>+254716119920</p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Email:</span>thiethnph45900@fpt.edu.vn</p>
                    </div>
                    <div class="col-md-3">
                        <p><span>Website</span> <a href="">yoursite.com</a></p>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 pr-md-5">
                        <form action="" method="post" name="contact">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Họ và tên:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="ten_kh">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Email:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Số điện thoại:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="so_dien_thoai">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Địa chỉ:</label>
                                    <input type="text" class="form-control" name="dia_chi">
                                </div>
                            </div>
                            <di class="col">
                                <div class="mb-3">
                                    <label for="contact" class="form-label">Tiêu đề của bạn:<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="tieu_de">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact" class="form-label">Lời nhắn của bạn:<span class="text-danger">*</span></label>
                                <textarea name="noi_dung" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <button type="submit" class="btn btn-primary">Gửi lời nhắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <br>
    <!-- Footer -->
    <?php include(PATH_VIEW . '/layouts/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

