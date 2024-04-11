<?php

function dashboard()
{
  $view = 'dashboard';
  $scripts = ['scripts/dashboard'];

  $dataDay = [];
  $thong_ke_theo_ngay = thong_ke_theo_ngay();
  for ($i = date('d') - 14; $i <= date('d'); $i++) {
    foreach ($thong_ke_theo_ngay as $day) {
      if ($day['day'] == $i) {
        $dataDay[$i] = ['total' => $day['total'], 'date' => date('j/n', strtotime($day['ngay_dat']))];
        break;
      }
      $date = date('j/n', strtotime('-' . date('d') - $i . ' days'));
      $dataDay[$i] = ['total' => 0, 'date' => $date];
    }
  }

  $dataMonth = [];
  for ($i = 1; $i <= 12; $i++) {
    foreach (thong_ke_theo_thang() as $month) {
      if ($month['month'] == $i) {
        $dataMonth[$i] = ['total' => $month['total'], 'month' => $i];
        break;
      }
      $dataMonth[$i] = ['total' => 0, 'month' => $i];
    }
  }

  $dataYear = [];
  for ($i = date('Y') - 4; $i <= date('Y'); $i++) {
    foreach (thong_ke_theo_nam() as $year) {
      if ($year['year'] == $i) {
        $dataYear[$i] = ['total' => $year['total'], 'year' => $i];
        break;
      }
      $dataYear[$i] = ['total' => 0, 'year' => $i];
    }
  }

  $contacts = listAll('tb_lien_he');
  $countContact = count($contacts);
  $countOkContact = 0;
  foreach ($contacts as $contact) {
    if ($contact['id_tt'] == 9) {
      $countOkContact++;
    }
  }
  $percentContact = ($countContact == 0 ? 0 : ceil($countOkContact / $countContact * 100)) . '%';
  require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function getMoney($year = '', $month = '', $day = '')
{
  $money = getSales($year, $month, $day);
  echo empty($money) ? '0' : number_format($money['total']);
}
