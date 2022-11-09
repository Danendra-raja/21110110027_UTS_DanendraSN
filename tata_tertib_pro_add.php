<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$tata_tertib = $_POST['tata_tertib'];
	
if(mysqli_query($mysqli, "INSERT INTO tab_tata_tertib (tata_tertib) VALUES('$tata_tertib')")){  
echo "<script language=javascript>
		alert('Simpan Berhasil');
		window.location='tata_tertib.php'; 
        </script>";
} else {
echo mysqli_error($mysqli);
}