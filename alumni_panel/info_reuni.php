
<?php
include"../koneksi.php";
session_start();
if(empty($_SESSION['id_alumni'])){

  echo "<script>window.alert('Login Terlebih Dahulu')</script>";
  echo "<meta http-equiv='refresh' content='0; url=login-alumni'>";
}
else{

?>






<?php
include "koneksi.php";
session_start();

$sql = "SELECT * FROM tbalumni  LEFT JOIN tbtahunlulus on tbalumni.id_lulus=tbtahunlulus.id_lulus where tbalumni.id_alumni = '$_SESSION[id_alumni]'";
$query = mysqli_query($link,$sql);
$data = mysqli_fetch_array($query);

?>




<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="beranda-alumni">Info Reuni</a>
					<span>| |</span>
				</li>
				<li>Panel Alumni</li>
			</ul>
		</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
				
				<?php

					include "sidebar.php";
				?>
			<div class="col-lg-9">

				<?php

					$sqli = mysqli_query($link,"SELECT * from tbkonfirmasi where id_alumni = '$_SESSION[id_alumni]'");
					$a = mysqli_fetch_array($sqli);


					if($a['status'] == "V") {
						$hasil = "<div class='alert alert-warning' role='alert'>
						Pembayaran Reuni Sudah Diterima Admin , 
						<strong>Terima kasih Untuk Pembayarannya </strong>
						</div>";

					} elseif ($a['status'] == "BV") {

						$hasil = "<div class='alert alert-warning' role='alert'>
						Pembayaran Reuni Anda sedang diverifikasi , 
						<strong> </strong>
						</div>";
					} else {
						$hasil = "<div class='alert alert-warning' role='alert'>
						Anda Belum Mendaftar Untuk Acara Reuni / Belum Melakukan Pembayaran Reuni , 
						<strong> </strong>
						</div>";
					}




				?>

				<div class="alert alert-info" role="alert">
						<strong>Info Reuni Akbar SMAN 3 Tambun Selatan</strong> : 5 Januari 2020
				</div>

				<?php
					echo $hasil;
				?>

				

			</div>
				<div class="row">
						<div class="col-lg-4">
								
							
							
						</div>
						<div class="col-lg-4">
							
							


						</div>
				</div>
		</div>
	</div> <!-- end row -->				
</div> <!-- end container -->	



	

<?php
}
?>
					
