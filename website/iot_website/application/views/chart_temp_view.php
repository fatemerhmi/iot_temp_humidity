<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="temoerature and himidity logs">
<meta name="author" content="Fatemeh Rahimi">
<title>IOT system</title>
<!-- Bootstrap core CSS-->
<link href="<?php echo base_url("assets/dash/vendor/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="<?php echo base_url("assets/dash/vendor/font-awesome/css/font-awesome.min.css") ?>"  rel="stylesheet" type="text/css">
<!-- Page level plugin CSS-->
<link href="<?php echo base_url("assets/dash/vendor/datatables/dataTables.bootstrap4.css") ?>"  rel="stylesheet">
<!-- Custom styles for this template-->
<link href="<?php echo base_url("assets/dash/css/sb-admin.css") ?>"  rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.html">IOT System</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard') ?>">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/temerature_chart') ?>">
          <i class="fa fa-fw fa-area-chart"></i>
          <span class="nav-link-text">Temerature Chart</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/humidity_chart') ?>">
          <i class="fa fa-fw fa-area-chart"></i>
          <span class="nav-link-text">Humidity Chart</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/temerature_table') ?>">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Temerature Table</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="<?php echo base_url('index.php/Dashboard/humidity_table') ?>">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Humidity Table</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="<?php echo base_url('index.php/EditInfo') ?>">
          <i class="fa fa-edit"></i>
          <span class="nav-link-text">Edit System Info</span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
      </li>
    </ul>
  </div>
</nav>
  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> IOT system Temerture chart</div>
        <div class="card-body">
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
          <canvas id="lineChart" width="100%" height="30"></canvas> 
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      
      <div class="row">
        <div class="col-lg-8">

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © IOT System</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('index.php/Dashboard/logout') ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url("assets/dash/vendor/jquery/jquery.min.js") ?>" ></script>
    <script src="<?php echo base_url("assets/dash/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>" ></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url("assets/dash/vendor/jquery-easing/jquery.easing.min.js") ?>"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url("assets/dash/vendor/chart.js/Chart.js") ?>" ></script>
    <script src="<?php echo base_url("assets/dash/vendor/datatables/jquery.dataTables.js") ?>" ></script>
    <script src="<?php echo base_url("assets/dash/vendor/datatables/dataTables.bootstrap4.js") ?>" ></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url("assets/dash/js/sb-admin.min.js") ?>" ></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url("assets/dash/js/sb-admin-datatables.min.js") ?>" ></script>
    <script src="<?php echo base_url("assets/dash/js/sb-admin-charts.min.js") ?>" ></script>

    <?php
    echo '<script>
    var ctxL = document.getElementById("lineChart").getContext("2d");
    var myLineChart = new Chart(ctxL, {
        type: "line",
        data: {
            labels: [';
    foreach($temps as $temp){
      echo '"'.$temp['date'].'",';
    }
    echo '],
    datasets: [
        {
            label: "Humidity",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [';
    foreach($temps as $temp){
      echo $temp['data'].',';
  }
  echo ']
}
]
},
options: {
responsive: true
}    
});

</script>';
    ?>
  </div>
</body>

</html>
