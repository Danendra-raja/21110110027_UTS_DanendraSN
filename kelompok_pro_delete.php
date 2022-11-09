<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_GET['id'];
	
$result=mysqli_query($mysqli, "DELETE FROM tab_kelompok WHERE id= '$id' ");
echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='kelompok.php';
			</script>";
?>