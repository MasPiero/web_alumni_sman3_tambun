<?php
include "../koneksi.php";
session_start();

$id_lulus = htmlspecialchars($_POST['id_lulus']);
$tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
$no_telp = htmlspecialchars($_POST['no_telp']);

$ubah = "UPDATE tbalumni set id_lulus = '$id_lulus', tempat_lahir = '$tempat_lahir' , no_telp = '$no_telp' Where id_alumni = '$_SESSION[id_alumni]'";
 mysqli_query($link,$ubah);

	echo "<script>window.alert('Data Sudah Diupdate')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../profil-alumni'>";



?>