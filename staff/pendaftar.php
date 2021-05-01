<?php

             session_start();
        // cek apakah yang mengakses halaman ini sudah login
        if($_SESSION['id_staff']==""){
                header("location:../index.php?pesan=gagal");
        }

include('./../temp/staff/header.php'); 
include('./../temp/staff/navbar.php'); 






?> 
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kelola Data Student</h1>
    
  </div>







   




                  
                     
<table id="tabel-data" >
    <thead>
        <tr>
          
            <th>Id Student</th>
            <th>Nama </th>
            <th>Email</th>
            <th>No.Hp</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include '../koneksi.php';
        $Student = mysqli_query($conn,"SELECT * FROM  guidebook gd , participant part WHERE gd.id_participant  =  part.id_participant");
         
              // tampilkan data

          
  foreach( $Student as $row ) {
    ?>

<tr>

 
    <td><?= $row["id_participant"]; ?></td>
    <td><?= $row["nama_participant"]; ?></td>
    <td><?= $row["email_participant"]; ?></td>
    <td><?= $row["telp_participant"]; ?></td>
    <td class="text-center"><?= $row["kids"]; ?></td>
  
    

      <td >
        <a href="#nilai<?php echo $row['id_participant']; ?>" data-toggle="modal" class="btn btn-sm btn-success" title="Cek Nilai" ><i class="fa fa-eye"> </i></a>
                       <?php
      include('ceknilai.php'); 
        ?>

        <a href="#edit<?php echo $row['id_participant']; ?>" data-toggle="modal" class="btn btn-sm btn-warning" title="Ubah" ><i class="fa fa-edit"> </i></a>
                    <?php
      include('edit.php'); 
        ?>
       
          
            <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="hapus.php?id_participant=<?php echo $row["id_participant"]; ?>" class="btn btn-danger btn-sm" title="Hapus Data"><i class="fa fa-trash"> </i></a></td>
  </tr>
 
  <?php } ?>
      
    </tbody>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>

</table>


  

 <script src="assets/js/Chart.js"></script>



 <!--End Content Row -->
      </div>
   
 <?php
include('./../temp/staff/chart.php');





?>







  <?php
include('./../temp/staff/scripts.php');

include('./../temp/staff/footer.php');



?>

