<?php

include "../koneksi.php";

session_start();

$sql = "SELECT * FROM tbalumni  LEFT JOIN tbtahunlulus on tbalumni.id_lulus=tbtahunlulus.id_lulus where tbalumni.id_alumni = '$_SESSION[id_alumni]'";
$query = mysqli_query($link,$sql);
$data = mysqli_fetch_array($query);

$nama = $data['nama'];

	$folder1		= 	"foto_alumni/";

	$valid_ext = array('jpg','jpeg','png','gif','bmp');
	$type   = $_FILES['gambar']['name'];
	$nama_file = $_FILES['gambar']['name'];
	$temp = explode(".", $_FILES["gambar"]["name"]);//untuk mengambil nama file gambarnya saja tanpa format 
	$file_name1 = $nama . '.' . end($temp);//fungsi untuk membuat nama acak
	$typegambar = end($temp);



if(isset($_POST['upload']) && $_FILES['gambar']['size']>0){

	$ext = strtolower(end(explode('.', $_FILES['gambar']['name'])));


	if(in_array($ext, $valid_ext)){

		move_uploaded_file($_FILES['gambar']['tmp_name'], $folder1.$file_name1);
		
		$sql	="UPDATE tbalumni SET foto='$file_name1' WHERE id_alumni='$_SESSION[id_alumni]'";
		$x = mysqli_query ($link,$sql);

	echo "<script>window.alert('Ubah Foto Berhasil')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../profil-alumni'>";



	}else{

		echo "Maaf... file yang ada pilih bukan file gambar. Hanya file JPG, PNG, GIF atau BMP yang boleh diupload..!";

	}

}

?>