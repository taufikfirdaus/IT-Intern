<?php
include "koneksi.php";
$id_staff = $_POST['id_staff'];
$password_staff     = md5($_POST['password_staff']);
$login = mysqli_query($conn, "SELECT * FROM staff WHERE id_staff = '$id_staff' AND password_staff='$password_staff'");
$row=mysqli_fetch_array($login);
if ($row['id_staff'] == $id_staff AND $row['password_staff'] == $password_staff)
{
  session_start();
  $_SESSION['id_staff'] = $row['id_staff'];
  $_SESSION['password_staff'] = $row['password_staff'];
  $_SESSION['nama_staff'] = $row['nama_staff'];
  $_SESSION['alias_staff'] = $row['alias_staff'];
  header('location:staff/index.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
  }else{
   echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
    echo "<script>location='index.php';</script>";
  }
?>