<?php

	error_reporting(0);
$hal=$_GET['hal'];						 
        if($hal=='Home' or $hal=='' ){require_once 'Home.php';} 
		elseif($hal=='Kontak'){require_once 'Kontak.php';} 
		elseif($hal=='ProfilSekolah'){require_once 'ProfilSekolah.php';} 
		elseif($hal=='BerandaAlumni'){require_once 'alumni_panel/index.php';} 
		elseif($hal=='LoginAlumni'){require_once 'LoginAlumni.php';} 
		elseif($hal=='Registrasi'){require_once 'RegisAlumni.php';}
		elseif($hal=='LupaPassword'){require_once 'Lupa_Password.php';}  
		elseif($hal=='BelumVerifikasi'){require_once 'blum_verif.php';} 
		elseif($hal=='Loker'){require_once 'loker.php';} 
			elseif($hal=='Galeri'){require_once 'Galeri.php';} 
		elseif($hal=='Kontak'){require_once 'Kontak.php';} 
		elseif($hal=='Alumni'){require_once 'Alumni.php';} 
		elseif($hal=='ProfilAlumni'){require_once 'alumni_panel/profil_alumni.php';} 
		elseif($hal=='InfoReuni'){require_once 'alumni_panel/info_reuni.php';} 
		elseif($hal=='PendaftaranReuni'){require_once 'alumni_panel/pendaftaran_reuni.php';} 
		elseif($hal=='KonfirmasiPembayaran'){require_once 'alumni_panel/konfirmasi_pembayaran.php';}
		elseif($hal=='Setting'){require_once 'alumni_panel/setting.php';}
		elseif($hal=='VerifikasiPembayaran'){require_once 'alumni_panel/verifikasi_pembayaran.php';}
		elseif($hal=='VerifikasiAkun'){require_once 'alumni_panel/verifikasi_akun.php';}
		elseif($hal=='DataRegistrasi'){require_once 'alumni_panel/data_registrasi.php';}
		elseif($hal=='PembayaranManual'){require_once 'alumni_panel/pembayaran_manual.php';}
		elseif($hal=='DataAll'){require_once 'alumni_panel/data_all.php';}
		elseif($hal=='AdminPeserta'){require_once 'alumni_panel/admin_peserta.php';}
		elseif($hal=='AdminVerifikasiAkun'){require_once 'alumni_panel/admin_verifikasi_akun.php';}
		elseif($hal=='AdminVerifikasiPembayaran'){require_once 'alumni_panel/admin_verifikasi_pembayaran.php';}
		elseif($hal=='DataAllDetail'){require_once 'alumni_panel/data_all_detail.php';}




?>

