<?php session_start();
if (!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$semester = $_POST['semester'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];


if (mysqli_query($mysqli, "UPDATE tab_panitia SET nama = '$nama', kelas='$kelas', semester=$semester, email='$email', no_hp='$no_hp', jabatan='$jabatan' WHERE nim = $nim")) {
	echo "<script language=javascript>
			alert('Simpan Berhasil');
			window.location='panitia.php';
			</script>";
} else {
	echo mysqli_error($mysqli);
}
