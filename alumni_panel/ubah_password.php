<?php
include "../koneksi.php";
session_start();

$x ="SELECT * FROM tbalumni where id_alumni='$_SESSION[id_alumni]'";
$q = mysqli_query($link,$x);

$r	=	mysqli_fetch_array($q);

$password_lama	=	htmlspecialchars($_POST['password_lama']);
$password_baru	=	htmlspecialchars($_POST['password_baru']);
$password_baru1	=	htmlspecialchars($_POST['password_baru1']);


	// Apabila password lama cocok dengan password admin di database
	if ($password_lama==$r['password']){
	  // Pastikan bahwa password baru yang dimasukkan sebanyak dua kali sudah cocok
		if ($_POST['password_baru']==$_POST['password_baru1']){
			$ww = "UPDATE tbalumni SET password = '$password_baru' where id_alumni='$_SESSION[id_alumni]'";
			mysqli_query($link,$ww);
			echo "<script>alert('Ganti Password Berhasil'); window.location = '../setting'</script>";
		}
		else{
			echo "<script>alert('Password baru yang anda masukkan tidak sama'); window.location = '../setting'</script>";
		}
	}
	else{
		echo "<script>alert('Password Lama anda salah'); window.location = '../setting'</script>";
	}

?>