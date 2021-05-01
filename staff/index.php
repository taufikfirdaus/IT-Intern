<?php


             session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['id_staff']==""){
                header("location:../index.php?pesan=gagal");
        }


include('./../temp/staff/header.php'); 
include('./../temp/staff/navbar.php'); 
        include '../koneksi.php';

$sql_pdk  = mysqli_query($conn, "SELECT count(*) as jum from  guidebook gd , participant part WHERE gd.id_participant  =  part.id_participant" );
$r_pdk    = mysqli_fetch_array($sql_pdk);
$total_pdk=$r_pdk['jum'];

$sql_brt  = mysqli_query($conn, "SELECT count(*) as jum FROM gb_answer ");
$r_brt    = mysqli_fetch_array($sql_brt);
$total_brt=$r_brt['jum'];





?> 

<!-- Begin Page Content -->
<div class="container-fluid">


  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
  </div>







    <div class="row" style="margin-bottom: 20px;">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-12">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Selamat Datang</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

                 <?php echo $_SESSION['nama_staff']; ?>

                    
        

              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-8 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Student</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php echo $total_pdk ?> Students

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-8 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Data Nilai</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $total_brt ?> Data Nilai</div>
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

    <!-- Pending Requests Card Example -->

  </div>

  <!-- Content Row -->
  <!-- grafik -->
  

 <!-- Content Row -->

                    <div class="row" style="margin-bottom:10px;">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-12">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
                                    <div class="dropdown no-arrow">
                                   
                                  
                                    </div>
                                </div>















                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas  id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                    </div>
  




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="../assets/js/Chart.js"></script>

<script src="chart-area-demo.js"></script>
<script type="text/javascript">
  
// Area Chart Example
var ctx = document.getElementById("myAreaChart");
<?php
  #$sql = mysqli_query($conn, "select count(id_participant) from participant where grup like 'My Learning Journal%'");
  $labels = '';
  for ($i = 0; $i < 7; $i++) {
    $angka = 8 - $i;
    $labels .= '"'.date('d/m/Y', strtotime('-'.$angka.' days', strtotime(date('Y-m-d')))).'", ';
  }
  $labels = substr($labels, 0, -2);
?>
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: [<?php echo $labels ?>],
    datasets: [{
      label: "Earnings",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [0, 10000, 5000, 15000, 10000, 20000, 15000],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return '$' + number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
        }
      }
    }
  }
});
</script>

 <!--End Content Row -->
      </div>
   
 <?php

include('./../temp/staff/chart.php');





?>







  <?php
include('./../temp/staff/scripts.php');

include('./../temp/staff/footer.php');



?>

