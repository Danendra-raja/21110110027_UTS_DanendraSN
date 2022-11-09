<?php session_start(); 

if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_GET['id'];
	
	$result = mysqli_query($mysqli, "INSERT INTO tab_peserta_kelompok (nim,id_kelompok) 
	select a.nim,'$id' from tab_peserta as a left join tab_peserta_kelompok as b on a.nim = b.nim 
	where b.nim is null order by rand() limit 5");   
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='peserta_kelompok.php';
			</script>";