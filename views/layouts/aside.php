<!-- script -->
<script defer src="js/category.js"></script>

<!-- categories -->
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