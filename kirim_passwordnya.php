<?php

include "koneksi.php";

$email_lupa = mysqli_real_escape_string($link, $_POST['email_lupa']);


$cek_email	=	mysqli_num_rows(mysqli_query($link,"SELECT email FROM tbalumni WHERE email='$email_lupa'"));

//Kalau email sudah ada yang pakai
if ($cek_email < 0){
	echo "<script>window.alert('Email <?php $_POST[email_lupa] ?> Belum Terdaftar')</script>";
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}
else{

function randomPassword()
{
// function untuk membuat password random 6 digit karakter

$digit = 6;
$karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

srand((double)microtime()*1000000);
$i = 0;
$pass = "";
while ($i <= $digit-1)
{
$num = rand() % 32;
$tmp = substr($karakter,$num,1);
$pass = $pass.$tmp;
$i++;
}
return $pass;
}

// membuat password baru secara random -> memanggil function randomPassword
$newPassword = randomPassword();

// perlu dibuat sebarang pengacak
$pengacak  = "NDJS3289JSKS190JISJI";

// mengenkripsi password dengan md5() dan pengacak
$newPasswordEnkrip = $newPassword;

// mencari alamat email si user
$query = "SELECT * FROM tbalumni WHERE email = '$email_lupa'";
$hasil = mysqli_query($link,$query);
$data  = mysqli_fetch_array($hasil);
$alamatEmail = $data['email'];

// title atau subject email
$title  = "Password Baru";

// isi pesan email disertai password
$pesan  = "Hallo Alumni 
			\n Password Anda yang baru adalah ".$newPassword.
			"\n Jangan Lupa ganti di panel alumni ya";

// header email berisi alamat pengirim
$header = "Permintaan Password Baru";

// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);

// cek status pengiriman email
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE tbalumni SET password = '$newPasswordEnkrip' WHERE email = '$email_lupa'";
    $hasil = mysqli_query($link,$query);

    if ($hasil) 
    	echo "<script>window.alert('Password Baru Sudah dikirim ke email')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../login-alumni'>";
    }
else {
 //echo "<script>window.alert('Email  $_POST[email_lupa] Belum Terdaftar')</script>";
		//echo "<meta http-equiv='refresh' content='0; url=index.php')</script>";
	
}
}
?>