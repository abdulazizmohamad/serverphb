
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content" href="#">
        <span class="info-box-text">User</span>
        <span class="info-box-number">
          <?php echo $jumlahuser ?>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-grin-tongue-squint"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Face Data</span>
        <span class="info-box-number"><?php echo $jumlahwajah?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-sign-in-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">User Login today</span>
        <span class="info-box-number">2</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-laptop-code"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">PC Server</span>
        <span class="info-box-number">8</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>

<!-- Code View Grafik -->
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div id="data_grafik"></div>
      </div>
    </div>
  </div>
</div>

<!-- Query untuk mengambil data tabel Grafik Suhu -->
<?php
    /* Mengambil query report*/
    foreach($report as $result){
        $suhu[] = (float) $result->suhu; //ambil suhu
        $waktu[] = date('d-M-Y H:i:s', strtotime($result->waktu)); //ambil waktu dengan mengubah format
        $kelembaban[] = (float) $result->kelembaban;

    }
    /* end mengambil query*/
     
?>
<!-- End Query untuk mengambil data tabel Grafik Suhu -->

<script src="<?php echo base_url('asset/chartjs'); ?>/highcharts.js"></script>
<script src="<?php echo base_url('asset/chartjs'); ?>/exporting.js"></script>
<script src="<?php echo base_url('asset/chartjs'); ?>/export-data.js"></script>
<script src="<?php echo base_url('asset/chartjs'); ?>/accessibility.js"></script>
<script type="text/javascript">
  Highcharts.chart('data_grafik', {
    chart: {
      type: 'area'
    },
    title: {
      text: 'Data Kelembaban Ruangan'
    },
    subtitle: {
      text: ''
    },
    xAxis: {
      categories: <?php echo json_encode($waktu);?> ,
      tickmarkPlacement: 'on',
      title: {
        enabled: false
      }
    },
    yAxis: {
      title: {
        text: 'Nilai'
      },
      labels: {
        formatter: function () {
          return this.value;
        }
      }
    },
    tooltip: {
      split: true,
      valueSuffix: ''
    },
    plotOptions: {
      area: {
        stacking: 'normal',
        lineColor: '#666666',
        lineWidth: 1,
        marker: {
          lineWidth: 1,
          lineColor: '#666666'
        }
      }
    },
    series: [{
        name: 'Kelembaban',
        data: <?php echo json_encode($kelembaban);?>
    },
    {
        name: 'Suhu',
        data: <?php echo json_encode($suhu);?>
    }]
  });
</script>
<!-- End Code View Grafik -->

