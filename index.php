<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">

        <style type="text/css">
        	
        </style>
    </head>

    <body>
        <?php
        
if(isset($_GET['pesan'])){
  if($_GET['pesan'] == "gagal"){
   echo "Login gagal! username dan password salah!";
  }else if($_GET['pesan'] == "logout"){
   echo "Anda telah berhasil logout";
  }else if($_GET['pesan'] == "belum_login"){
   echo "Anda harus login untuk mengakses halaman admin";
  }
 }
 ?>
 <div 
        <div class="container">
          <h1>Login</h1>



            <form action="ceklogin.php" method="post" onSubmit="return validasi()">
                <label>Username</label><br>
                <input type="text" name="id_staff" id="id_staff"><br>
                <label>Password</label><br>
                <input type="password" name="password_staff"  id="password_staff"><br>
<BUTTON type="submit" value="Login" class="tombol">Login</BUTTON> 
               
            </form>

        </div>
        <script type="text/javascript">
  
  function validasi() {
  var username = document.getElementById("id_staff").value;
  var password = document.getElementById("password_staff").value;
      if (username != "" && password!="") {
   return true;
  }else{
   alert('Username dan Password Wajib Diisi :V');
   return false;
  }
 }
</script>
    </body>
</html>
