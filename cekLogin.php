<?php

include "koneksi.php";


date_default_timezone_set('Asia/Jakarta');


$email 		= htmlspecialchars($_POST['email']);
$password 	= htmlspecialchars($_POST['password']);
$ip 		= $_SERVER['REMOTE_ADDR'];
$tanggal = date("Y-m-d H:i:s");

//cek pada tabel pendaftaran dimana no pendaftaran dan tanggal lahir sesuai dengan yang di input di form login
$sql = "SELECT * FROM tbalumni WHERE email='$email' AND password='$password'";
$result = mysqli_query($link,$sql);
$ketemu = mysqli_num_rows($result);
$r  	= mysqli_fetch_array($result);




if($r['status_akun']=="Belum Aktif"){

		echo "
		<script>alert('Login Berhasil'); 
		window.location = 'belum-verifikasi'</script>

	";
	}else{
//menggunakan percabangan
//Apabila username dan password ditemukan maka menjalankan perintah ini
if ($ketemu > 0){
	
	//session digunakan untuk menampung nilai sementara dalam sistem
	//memulai session
	session_start();

	//mendaftarkan session yang akan di tampung nilainya
	$_SESSION['id_alumni']		= $r['id_alumni'];
	$_SESSION['nama']			= $r['nama'];
	$_SESSION['status_akun']	= $r['status_akun'];
	$_SESSION['level_admin']	= $r['level_admin'];
	$_SESSION['id_lulus']	= $r['id_lulus'];
	$_SESSION['ip']				= $ip;


	$track = mysqli_query($link,"INSERT INTO log VALUES ('','$_SESSION[id_alumni]','$r[nama]','$ip','$tanggal','Berhasil Login ke Panel Alumni') ");
	
  
	//jika berhasil link akan mengarah ke media calon siswa/halaman si calon siswa
	echo "
		<script>alert('Login Berhasil. Selamat Datang $_SESSION[nama]'); 
		window.location = 'beranda-alumni'</script>
	";
}
//selain itu dia akan mengeksekusi atau jika salah login dia akan kembali ke halaman login
else{
   echo "
		<script>alert('Email atau Password Salah/Tidak Sesuai'); 
		window.location = 'login-alumni'</script>
	";
}
}
	
?>