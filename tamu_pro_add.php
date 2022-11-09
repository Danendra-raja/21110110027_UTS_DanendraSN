<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nama_tamu = $_POST['nama_tamu'];
$jabatan = $_POST['jabatan'];
	
	$result = mysqli_query($mysqli, "INSERT INTO tab_tamu (nama_tamu,jabatan) VALUES('$nama_tamu','$jabatan')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='tamu.php';
			</script>";
