<?php

include "../koneksi.php";

$id_alumni = $_GET['id_alumni'];

$x = mysqli_query ($link, "UPDATE tbalumni SET status_akun = 'Aktif' WHERE id_alumni = $id_alumni "  );
echo "<script>window.alert('Sudah Diverifikasi')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../verifikasi-pembayaran'>";


?>