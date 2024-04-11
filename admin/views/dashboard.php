<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thống kê chung</h1>
  </div>

  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Tổng người dùng</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format(count(listAll('tb_nguoi_dung'))) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                Đơn hàng</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format(count(listAll('tb_don_hang'))) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cart-shopping fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Tổng sản phẩm</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format(count(listAll('tb_san_pham'))) ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-mobile-screen-button fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Liên hệ (Đã xử lý <?= $countOkContact ?> / <?= $countContact ?>)</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $percentContact ?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?= $percentContact ?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thống kê doanh thu</h1>
  </div>

  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                Theo ngày</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span id="salesDay">
                  <?= number_format($moneyDay['total']) ?>
                </span> VNĐ
              </div>
            </div>
            <div class="col-auto">
              <select name="" id="" class="form-control" onchange="getSalesDay(this.value)">
                <?php for ($i = date('d'); $i >= 1; $i--) : ?>
                  <option value="<?= $i ?>" <?= date('d') == $i ? 'selected' : null ?>>
                    <?= $i . '/' . date('n/Y') ?>
                  </option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Theo tháng</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span id="salesMonth">
                  <?= number_format($moneyMonth['total']) ?>
                </span> VNĐ
              </div>
            </div>
            <div class="col-auto">
              <select name="" id="" class="form-control" onchange="getSalesMonth(this.value)">
                <?php for ($i = 1; $i <= 12; $i++) : ?>
                  <option value="<?= $i ?>" <?= date('m') == $i ? 'selected' : null ?>>Tháng
                    <?= $i . '/' . date('Y') ?>
                  </option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Theo năm</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <span id="salesYear">
                  <?= number_format($moneyYear['total']) ?>
                </span> VNĐ
              </div>
            </div>
            <div class="col-auto">
              <select name="" id="" class="form-control" onchange="getSalesYear(this.value)">
                <?php for ($i = date('Y') - 4; $i <= date('Y'); $i++) : ?>
                  <option value="<?= $i ?>" <?= date('Y') == $i ? 'selected' : null ?>>Năm
                    <?= $i ?>
                  </option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Theo tuần</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?= number_format($moneyWeek['total']) ?> VNĐ
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="card shadow mb-4">
      <div class="card-header py-3 ">
        <div class="row d-flex flex-row align-items-center justify-content-between">
          <div class="col-10">
            <h6 class="m-0 font-weight-bold text-primary">Tổng quan doanh thu theo</h6>
          </div>
          <div class="col-2">
            <select id="timePeriod" class="form-control">
              <option value="day">Ngày</option>
              <option value="month" selected>Tháng</option>
              <option value="year">Năm</option>
            </select>

          </div>
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
          <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
              <div class=""></div>
            </div>
            <div class="chartjs-size-monitor-shrink">
              <div class=""></div>
            </div>
          </div>
          <canvas id="myAreaChart" width="537" height="400" style="display: block; height: 320px; width: 430px;" class="chartjs-render-monitor"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Biểu đồ cột</h6>
      </div>
      <div class="card-body">
        <div class="chart-area">
          <canvas id="myBarChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function getSalesDay(day) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("salesDay").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "<?= BASE_URL_ADMIN ?>?act=sale-day&day=" + day, true);
    xmlhttp.send();
  }

  function getSalesMonth(month) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("salesMonth").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "<?= BASE_URL_ADMIN ?>?act=sale-month&month=" + month, true);
    xmlhttp.send();
  }

  function getSalesYear(year) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("salesYear").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "<?= BASE_URL_ADMIN ?>?act=sale-year&year=" + year, true);
    xmlhttp.send();
  }
</script>