<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_GET['nim'];
	
$result=mysqli_query($mysqli, "DELETE FROM tab_peserta WHERE nim= '$nim' ");
echo "<script language=javascript>
			alert('Hapus Berhasil');
			window.location='peserta.php';
			</script>";
