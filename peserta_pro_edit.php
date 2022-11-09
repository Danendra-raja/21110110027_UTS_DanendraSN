<?php session_start();
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$foto = $_POST['foto'];
$agama = $_POST['agama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
if (mysqli_query($mysqli, "UPDATE tab_peserta SET nim = $nim, nama = '$nama', prodi = '$prodi', kelas = '$kelas', semester = $semester, email = '$email', no_hp = '$no_hp', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', foto = '$foto', agama = '$agama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir' WHERE nim = $id")) {
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='peserta.php';
			</script>";
} else {
	echo mysqli_error($mysqli);
}