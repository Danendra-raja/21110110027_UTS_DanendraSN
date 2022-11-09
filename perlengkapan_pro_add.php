<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$perlengkapan = $_POST['perlengkapan'];
$kategori = $_POST['kategori'];
	
if(mysqli_query($mysqli, "INSERT INTO tab_perlengkapan (perlengkapan, kategori) VALUES('$perlengkapan', '$kategori')")){  
echo "<script language=javascript>
		alert('Simpan Berhasil');
		window.location='perlengkapan.php'; 
        </script>";
} else {
echo mysqli_error($mysqli);
}