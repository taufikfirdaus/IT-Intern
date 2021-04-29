<?php
// Panggil koneksi database
require_once "../koneksi.php";

if (isset($_GET['id_participant'])) {

	$id_participant = $_GET['id_participant'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($conn, "DELETE FROM guidebook WHERE id_participant='$id_participant'");

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		echo "<script>alert('Data Berhasil Dihapus !!!');</script>";
    echo "<script>location='pendaftar.php';</script>";
	} else {
		// jika gagal tampilkan pesan kesalahan
		echo "<script>alert('Data Gagal Dihapus !!!');</script>";
        echo "<script>location='pendaftar.php';</script>";
	}	
}							
?>