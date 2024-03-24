<?php

function dashboard()
{
  $view = 'dashboard';
  $scripts = ['scripts/dashboard'];
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}
