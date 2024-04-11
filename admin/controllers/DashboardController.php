<?php

function dashboard()
{
  $view = 'dashboard';
  $scripts = ['scripts/dashboard'];


  $dataDay = [];
  for ($i = date('d') - 7; $i <= date('d'); $i++) {
    foreach (thong_ke_theo_ngay() as $day) {
      if ($day['day'] == $i) {
        $dataDay[$i] = ['total' => $day['total'], 'day' => $i];
        break;
      }
      $dataDay[$i] = ['total' => 0, 'day' => $i];
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

  $moneyDay = getSalesByDay(date('d'));
  $moneyMonth = getSalesByMonth(date('m'));
  $moneyYear = getSalesByYear(date('Y'));
  $moneyWeek = getSalesByWeek();

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

function salesMonth($month)
{
  $moneyMonth = getSalesByMonth($month);
  if (empty($moneyMonth['total'])) {
    echo '0';
  } else {
    echo number_format($moneyMonth['total'], 0, ',');
  }
}

function salesDay($day)
{
  $moneyDay = getSalesByDay($day);
  if (empty($moneyDay['total'])) {
    echo '0';
  } else {
    echo number_format($moneyDay['total'], 0, ',');
  }
}

function salesYear($year)
{
  $moneyYear = getSalesByYear($year);
  if (empty($moneyYear['total'])) {
    echo '0';
  } else {
    echo number_format($moneyYear['total'], 0, ',');
  }
}
