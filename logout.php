<?php
include "koneksi.php";
session_start();

$ip 		= $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");

$track = mysqli_query($link,"INSERT INTO log VALUES ('','$_SESSION[id_alumni]','$_SESSION[nama]','$ip','$tanggal','Logout dari Panel Alumni') ");

session_destroy();


echo "
		<script>alert('Anda Sudah Logout'); 
		window.location = 'beranda'</script>
	";

?>