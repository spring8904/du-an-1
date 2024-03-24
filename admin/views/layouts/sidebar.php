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

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>