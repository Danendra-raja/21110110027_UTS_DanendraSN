<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$perlengkapan = $_POST['perlengkapan'];
$kategori = $_POST['kategori'];
	
if(mysqli_query($mysqli, "UPDATE tab_perlengkapan SET perlengkapan='$perlengkapan', kategori='$kategori' WHERE id=$id")){  
echo "<script language=javascript>
		alert('Edit Berhasil');
		window.location='perlengkapan.php'; 
        </script>";
} else {
echo mysqli_error($mysqli);
}