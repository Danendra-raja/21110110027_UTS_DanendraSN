<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nama_kelompok = $_POST['nama_kelompok'];
	
	$result = mysqli_query($mysqli, "INSERT INTO tab_kelompok (nama_kelompok) VALUES('$nama_kelompok')");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='kelompok.php';
			</script>";

?>