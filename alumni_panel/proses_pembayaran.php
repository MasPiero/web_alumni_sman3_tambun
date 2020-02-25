<?php

include "../koneksi.php";

session_start();



	$nama_bank = $_POST['nama_bank'];
	$atas_nama = $_POST['atas_nama'];
	$nominal = $_POST['nominal'];
	$nama 	= $_SESSION['nama'];

	$folder1		= 	"foto_konfirmasi/";

	$valid_ext = array('jpg','jpeg','png','gif','bmp');
	$type   = $_FILES['gambar']['name'];
	$nama_file = $_FILES['gambar']['name'];
	$temp = explode(".", $_FILES["gambar"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format 
	$file_name1 = 'konfirmasi_' .$nama . '.' . end($temp);//fungsi untuk membuat nama acak
	$typegambar = end($temp);



if(isset($_POST['upload']) && $_FILES['gambar']['size']>0){

	$ext = strtolower(end(explode('.', $_FILES['gambar']['name'])));


	if(in_array($ext, $valid_ext)){

		

		move_uploaded_file($_FILES['gambar']['tmp_name'], $folder1.$file_name1);
		


		$save	= "INSERT INTO tbkonfirmasi VALUES('','$_SESSION[id_alumni]','$nama_bank','$atas_nama','$nominal','$file_name1','BV')";

					$x = mysqli_query($link,$save);

		$y = mysqli_query ($link, "UPDATE tbregisreuni SET status_pembayaran = 'Belum Verifikasi' WHERE id_alumni = $_SESSION[id_alumni]");

		$x1 = mysqli_query($link,$y);

	echo "<script>window.alert('Konfirmasi Pembayaran Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../profil-alumni'>";



	}else{

		echo "<script>window.alert('Gambar Hanya Boleh jpg jpeg png')</script>";
		echo "<meta http-equiv='refresh' content='0; url=../konfirmasi-pembayaran'>";

	}

}



?>