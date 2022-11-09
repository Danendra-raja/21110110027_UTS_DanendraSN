<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$nama_tamu = $_POST['nama_tamu'];
$jabatan = $_POST['jabatan'];
	
$result = mysqli_query($mysqli, "UPDATE tab_tamu SET nama_tamu='$nama_tamu', jabatan='$jabatan' WHERE id='$id' ");   
echo "<script language=javascript>
			alert('Perbaikan Berhasil');
			window.location='tamu.php';
			</script>";
