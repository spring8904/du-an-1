<!-- script -->
<script defer src="js/category.js"></script>

<!-- categories -->
<section id="category-container">
	<h4>Bộ lọc</h4>
	<form action="" method="GET">
		<input type="text" name="act" id="" value="search" hidden>
		<div class="form-group">
			<label for="category">Danh mục:</label>
			<select class="form-control" name="category_id">
				<option value="">Tất cả</option>
				<?php foreach ($categories as $category) : ?>
					<option value="<?= $category['id'] ?>"><?= $category['ten_dm'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label for="name">Tên sản phẩm:</label>
			<input type="text" class="form-control" name="product_name">
		</div>
		<div class="form-group">
			<label for="price">Giá thấp nhất:</label>
			<input type="number" class="form-control" name="price_min">
		</div>
		<div class="form-group">
			<label for="price">Giá cao nhất:</label>
			<input type="number" class="form-control" name="price_max">
		</div>
		<button type="submit" name="search" class="btn btn-primary mt-3">Áp dụng</button>
	</form>
</section>

<section id="category-container">
	<h2>Danh mục sản phẩm</h2>
	<div id="category-buttons-container">
		<?php
		$categories = listAll('tb_danh_muc_sp');
		foreach ($categories as $category) : ?>
			<a href="?act=search&category_id=<?= $category['id'] ?>" data-category-id="<?= $category['id'] ?>" class="category-button">
				<?php if (!empty($category['hinh_anh'])) { ?>
					<img src="<?= BASE_URL ?>uploads/prCategories/<?= $category['hinh_anh'] ?>" alt="category icon" />
				<?php } ?>
				<span><?= $category['ten_dm'] ?></span>
			</a>
		<?php endforeach ?>
	</div>
</section>