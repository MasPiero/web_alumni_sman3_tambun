<?php
include "../koneksi.php";
session_start();

$id_alumni = htmlspecialchars($_POST['id_alumni']);
$id_lulus = htmlspecialchars($_POST['id_lulus']);
$no_telp = htmlspecialchars($_POST['no_telp']);
$password = htmlspecialchars($_POST['password']);
$level_admin = htmlspecialchars($_POST['level_admin']);

$ubah = "UPDATE tbalumni set id_lulus = '$id_lulus', level_admin = '$level_admin' , password = '$password', no_telp = '$no_telp' Where id_alumni = '$id_alumni'";
 mysqli_query($link,$ubah);

	echo "<script>window.alert('Data Sudah Diupdate')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php?hal=DataAllDetail&id_alumni=$id_alumni'>";



?>