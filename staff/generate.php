<?php

             session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['id_staff']==""){
                header("location:../index.php?pesan=gagal");
        }

include('./../temp/staff/header.php'); 
include('./../temp/staff/navbar.php'); 






?> 

  
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Data Generate</h1>
    
  </div>

  <div class="container mt-3" style="margin-bottom:10px">
    <div class="row">
      <div class="col">
        <div class="card shadow">
          <div class="card-header">
            <div class="clearfix">
              <div class="float-left">
                Generate Data
              </div>
              
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="" enctype="multipart/form-data">
                
              <div class="form-group">
                <label for="judul">Jumlah</label>
                <input type="number" class="form-control" id="judul" placeholder="Jumlah yang akan di generate" autocomplete="off" required="required" name="jumlah">
              </div>

                  <div class="form-group">
                <label for="judul">Group</label>
                <input type="text" class="form-control" id="judul" placeholder="Nama Group yang akan digenerate" autocomplete="off" required="required" name="group">
              </div>
              
             
        

              <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary" name="tambah">Generate</button>
                <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
                <a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>








   

   



                      
  
  



  



 <!--End Content Row -->
      </div>
   
 <?php
include('./../temp/staff/chart.php');





?>







  <?php
include('./../temp/staff/scripts.php');

include('./../temp/staff/footer.php');



?>

