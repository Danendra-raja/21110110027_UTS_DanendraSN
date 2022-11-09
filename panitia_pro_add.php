<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];
if(mysqli_query($mysqli, "INSERT INTO tab_panitia (nim,nama,semester,kelas,email,no_hp,jabatan) 
	VALUES('$nim','$nama','$semester','$kelas','$email','$no_hp','$jabatan')")){   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='panitia.php';
			</script>";
} else {
	echo mysqli_error($mysqli);
}