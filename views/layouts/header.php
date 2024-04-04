<head>
	<link rel="stylesheet" href="css/header.css" />
	<script src="js/jquery/jquery-3.3.1.min.js"></script>
	<script src="js/cart.js"></script>
</head>

<body>
	<header>
		<nav>
			<div id="logo">
				<a href="./">
					<img src="imgs/logo/logo-black.png" alt="error" />
				</a>
			</div>

			<form method="GET" action="" id="research">
				<input type="text" name="act" value="search" hidden>
				<input type="search" name="product_name" minlength="2" placeholder="VD: iPhone, Samsung ..." required />
				<button type="submit" name="search">
					<img src="imgs/search.png" alt="error" />
					<span>Tìm kiếm</span>
				</button>
			</form>

			<ul id="navigation">
				<?php if (!isset($_SESSION['user'])) : ?>
					<li class="navigation-item">
						<img src="imgs/connect.png" alt="image error" />
						<span>Xác thực</span>

						<div class="nav-hover-tab" id="connect-nht">
							<a href="<?= BASE_URL ?>?act=login" class="nht-login-button">
								<img src="imgs/account.png" alt="image error" />
								<span>Đăng nhập</span>
							</a>

							<span class="splitter"></span>

							<a href="<?= BASE_URL ?>?act=signup" class="nht-login-button">
								<img src="imgs/new-account.png" alt="image error" />
								<span>Đăng ký</span>
							</a>
						</div>
					</li>
				<?php else : ?>
					<li class="navigation-item">
						<img src="imgs/connect.png" alt="image error" />
						<span>Tài khoản</span>

						<div class="nav-hover-tab" id="connect-nht">
							<?php if ($_SESSION['user']['id_cv'] == 1) : ?>
								<a href="<?= BASE_URL_ADMIN ?>" class="nht-login-button" style="margin-bottom: 8px">
									<img src="imgs/admin.png" alt="image error" />
									<span>Trang quản trị</span>
								</a>
							<?php endif ?>

							<a href="<?= BASE_URL ?>?act=account" class="nht-login-button" style="margin-bottom: 8px">
								<img src="imgs/information.png" alt="image error" />
								<span>Thông tin</span>
							</a>

							<a href="<?= BASE_URL ?>?act=myOrder" class="nht-login-button">
								<img src="imgs/shopping-cart.png" alt="image error" />
								<span>Đơn hàng</span>
							</a>

							<span class="splitter"></span>

							<a href="<?= BASE_URL ?>?act=logout" class="nht-login-button">
								<img src="imgs/logout.png" alt="image error" />
								<span>Đăng xuất</span>
							</a>
						</div>
					</li>
				<?php endif ?>
				<li class="navigation-item">
					<img src="imgs/contact-us.png" alt="image error" />
					<a href="<?= BASE_URL ?>?act=contact">
						<span>Liên hệ</span>
					</a>
				</li>

				<li class="navigation-item">
					<img src="imgs/help.png" alt="image error" />
					<a href="<?= BASE_URL ?>?act=about-us">
						<span>Giới thiệu</span>
					</a>
					<div class="nav-hover-tab" id="about-nht">
						<div id="call-us-div">
							<span>
								<img src="imgs/call-us.png" alt="image error" />
								Liên hệ
							</span>
							<p>+254716119920</p>
						</div>

						<span class="splitter"></span>

						<a href="#" class="nht-about-button">
							<img src="imgs/about-us.png" alt="image error" />
							<span>Về chúng tôi</span>
						</a>
						<a href="#" class="nht-about-button">
							<img src="imgs/shipping.png" alt="image error" />
							<span>Vận chuyển</span>
						</a>
						<a href="#" class="nht-about-button">
							<img src="imgs/payment.png" alt="image error" />
							<span>Thanh toán</span>
						</a>

						<span class="splitter"></span>

						<a href="about-us#aide" class="nht-about-button">
							<img src="imgs/question-mark.png" alt="image error" />
							<span>Cần giúp đỡ</span>
						</a>
					</div>
				</li>

				<li class="navigation-item">
					<a href="<?= BASE_URL ?>?act=promotion">
						<span>Mã khuyến mãi</span>
					</a>
				</li>
			</ul>

			<div id="cart-container">
				<a href="<?= BASE_URL ?>?act=cart">
					<button id="cart-button">
						<img src="imgs/shopping-cart.png" alt="image error" />
					</button>
				</a>
			</div>
		</nav>
	</header>
</body>