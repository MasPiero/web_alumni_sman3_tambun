<?php

include "../koneksi.php";

$id_alumni = $_GET['id_alumni'];

$x = mysqli_query ($link, "UPDATE tbregisreuni SET status_pembayaran = 'Sudah Bayar' WHERE id_alumni = $id_alumni "  );
$y = mysqli_query ($link, "UPDATE tbkonfirmasi SET status = 'V' WHERE id_alumni = $id_alumni "  );
echo "<script>window.alert('Sudah Dikonfirmasi')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../verifikasi-pembayaran'>";


?>