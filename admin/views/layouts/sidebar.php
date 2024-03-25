<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL_ADMIN ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item  <?= !isset($_GET['act'])  ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Role -->
  <li class="nav-item <?= isset($_GET['act']) && strpos($_GET['act'], 'role') !== false ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>?act=roles">
      <i class="fas fa-fw fa-table"></i>
      <span>QL Chức vụ</span></a>
  </li>

  <!-- Nav Item - User -->
  <li class="nav-item <?= isset($_GET['act']) && strpos($_GET['act'], 'user') !== false ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>?act=users">
      <i class="fas fa-fw fa-table"></i>
      <span>QL User</span></a>
  </li>

  <!-- Nav Item - Pr category -->
  <li class="nav-item <?= isset($_GET['act']) && strpos($_GET['act'], 'prCategor') !== false ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>?act=prCategories">
      <i class="fas fa-fw fa-table"></i>
      <span>QL Danh mục Sp</span></a>
  </li>

  <!-- Nav Item - Product -->
  <li class="nav-item <?= isset($_GET['act']) && strpos($_GET['act'], 'product') !== false ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>?act=products">
      <i class="fas fa-fw fa-table"></i>
      <span>QL Sản phẩm</span></a>
  </li>

  <!-- Nav Item - Post -->
  <li class="nav-item <?= isset($_GET['act']) && strpos($_GET['act'], 'post') !== false ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>?act=posts">
      <i class="fas fa-fw fa-table"></i>
      <span>QL Bài viết</span></a>
  </li>

  <li class="nav-item <?= isset($_GET['act']) && strpos($_GET['act'], 'contact') !== false ? "active" : "" ?>">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>?act=contacts">
      <i class="fas fa-fw fa-table"></i>
      <span>QL Liên hệ</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>