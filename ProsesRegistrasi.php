<?php
include "koneksi.php";

$cek_nik	=	mysqli_num_rows(mysqli_query($link,"SELECT email FROM tbalumni WHERE email='$_POST[email]'"));

//Kalau email sudah ada yang pakai
if ($cek_nik > 0){
	echo "<script>window.alert('Email $_POST[email] Sudah Terdaftar')</script>";
		echo "<meta http-equiv='refresh' content='0; url=Registrasi'>";
		}
		else{


	$nama			=	htmlspecialchars($_POST['nama']);
	$jk				=	htmlspecialchars($_POST['jk']);
	$password1		=	htmlspecialchars($_POST['password1']);
	$password2		=	htmlspecialchars($_POST['password2']);
	$email			=	htmlspecialchars($_POST['email']);
	$tempat_lahir	=	"--Belum Diisi--";
	$kelas_terakhir	=	"--Belum Diisi--";
	$no_telp		=	"--Belum Diisi--";
	$id_lulus		=	$_POST['id_lulus'];
	$foto			= 	"user.png";
	$status_akun			= 	"Belum Aktif";
	$level_admin			= 	1;
	//Mulai memorises data
	


	

	//mulai memproses upload file
	
		if($password1 != $password2){

						echo "<script>window.alert('Password Tidak Sama')</script>";
						echo "<meta http-equiv='refresh' content='0; url=Registrasi'>";


					


 		}else

 			{


 				
 					 

					 
					$save	=	mysqli_query($link,"INSERT INTO tbalumni VALUES('','$nama','$jk','$email','$tempat_lahir','$password1','$id_lulus','$no_telp','$kelas_terakhir','$foto','$status_akun','$level_admin')");
					
					echo "<script>window.alert('Pendaftaran Berhasil, akun Anda akan di verifikasi Admin')</script>";
					echo "<meta http-equiv='refresh' content='0; url=index.php'>";
					
	 				
	 		}

 }

?>