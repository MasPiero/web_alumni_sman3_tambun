<?php

include "../koneksi.php";

session_start();

		

	$id_alumni = $_POST['id_alumni'];
	$nominal = $_POST['nominal'];

	

	

		$save	= "INSERT INTO tbkonfirmasi VALUES('','$id_alumni','Manual','Cash','$nominal','-','V')";

			$x = mysqli_query($link,$save);

		$update = "UPDATE tbregisreuni set status_pembayaran = 'Sudah Bayar' where id_alumni = $id_alumni";
			$x = mysqli_query($link,$update);


	echo "<script>window.alert('Pembayaran Manual Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../data-registrasi'>";



	



?>