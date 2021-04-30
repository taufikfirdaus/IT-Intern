
    <?php
    	include('../koneksi.php');
     
    	$id = $_GET['id_participant'];
     
    	$email_participant=$_POST['email_participant'];
    	$akses_participant=$_POST['akses_participant'];
  
   
     
     
     

     
    
       $update= mysqli_query($conn,"update participant set  email_participant='$email_participant', akses_participant='$akses_participant' where id_participant='$id'");


if( !$update) {
		echo "<script>
			alert('data gagal dubah!');
			document.location.href = 'pendaftar.php';
		</script>";
	
} else {
	echo "<script>
			alert('data berhasil diubah!');
			document.location.href = 'pendaftar.php';
		</script>";

}
 
    ?>