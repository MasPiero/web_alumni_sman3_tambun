<?php
include "../koneksi.php";
session_start();



$sql	= "SELECT id_alumni FROM tbregisreuni WHERE id_alumni='$_SESSION[id_alumni]'";
$result = mysqli_query($link,$sql);
$count = mysqli_num_rows($result);


//Kalau email sudah ada yang pakai
if ($count > 0){
	echo "<script>window.alert('Anda Sudah Registrasi Sebelumnya')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../pendaftaran-reuni'>";
		}
		else{


	$id_alumni		=	htmlspecialchars($_SESSION['id_alumni']);
	$jumlah_dibawa	=	htmlspecialchars($_POST['jumlah_dibawa']);
	$kendaraan		=	htmlspecialchars($_POST['kendaraan']);
	$status_pembayaran = "Belum Bayar";
	
		 
					$save	= "INSERT INTO tbregisreuni VALUES('','$id_alumni','$jumlah_dibawa','$kendaraan','$status_pembayaran')";

					$x = mysqli_query($link,$save);
					
					echo "<script>window.alert('Pendaftaran Berhasil , Silahkan Melakukan Pembayaran')</script>";
					echo "<meta http-equiv='refresh' content='0; url=../beranda-alumni'>";
					}
					
	 				
	 		

 

?>