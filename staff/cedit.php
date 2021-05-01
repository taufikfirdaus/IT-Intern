
    <?php
    	include('../koneksi.php');
     
    	$id_participant = $_POST['id_participant'];
     
    	$email_participant=$_POST['email_participant'];
    	$akses_participant=$_POST['akses_participant'];
        $kids = $_POST['kids'];
  
   
     
     
     

     
    
       $update= mysqli_query($conn,"update participant set  email_participant='$email_participant', akses_participant='$akses_participant' where id_participant='$id_participant'");

       $update1= mysqli_query($conn,"update guidebook set  kids='$kids'where id_participant='$id_participant'");


if( $update || $update1) {
	
	   echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'pendaftar.php';
        </script>";
} else {


            echo "<script>
            alert('data gagal dubah!');
            document.location.href = 'pendaftar.php';
        </script>";

}
 
    ?>