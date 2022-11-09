<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$tanggal = $_POST['tanggal'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$nama_kegiatan = $_POST['nama_kegiatan'];
$narasumber = $_POST['narasumber'];
$foto = $_POST['foto'];
	
if(mysqli_query($mysqli, "INSERT INTO tab_kegiatan (tanggal, jam_mulai, jam_selesai, nama_kegiatan, narasumber, pic) VALUES('$tanggal', '$jam_mulai', '$jam_selesai', '$nama_kegiatan', '$narasumber', '$foto')")){  
echo "<script language=javascript>
		alert('Simpan Berhasil');
		window.location='kegiatan.php'; 
        </script>";
} else {
echo mysqli_error($mysqli);
}