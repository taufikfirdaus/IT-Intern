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

 <!--End Content Row -->
      </div>
   
 <?php

include('./../temp/staff/chart.php');





?>







  <?php
include('./../temp/staff/scripts.php');

include('./../temp/staff/footer.php');



?>

