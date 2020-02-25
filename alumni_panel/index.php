
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
					<a href="beranda-alumni">Beranda</a>
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

				<div class="alert alert-info" role="alert">
						Halo <strong><?php echo $data['nama'] ?></strong> , Selamat Datang di Panel Alumni
				</div>

				<h3 class="typoh2">Angkatan : <?php echo $data[id_lulus] ?></h3>
			<p>Tahun Lulus : <?= $data['tahun_lulus'] ?>.</p>
			<div class="bs-docs-example">
				<table class="table">
					<thead>
						<tr>
							
							<th>Nama Lengkap</th>
							<th>Kelas</th>
							<th>Email</th>
						</tr>
					</thead>
					<?php


				$jumlahdataperhalaman = 10;
				$result = mysqli_query($link,"SELECT * FROM tbalumni where id_lulus = '$data[id_lulus]'");
				$jumlahdata= mysqli_num_rows($result);
				$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
					if(isset($_GET['p'])){
						$halamanaktif = $_GET['p'];
					} else {
						$halamanaktif = 1;
					}
				
				$awaldata = ($jumlahdataperhalaman * $halamanaktif)- $jumlahdataperhalaman;

				$sqlx = "SELECT * FROM tbalumni where id_lulus = '$data[id_lulus]' order by nama ASC LIMIT $awaldata , $jumlahdataperhalaman";

				


				$queryx = mysqli_query($link,$sqlx);
			
				while($datax = mysqli_fetch_array($queryx)){
					$no++;
				?>
					<tbody>
						<tr>
							
							<td><?php echo $datax['nama'] ?></td>
							<td><?php echo $datax['kelas_terakhir'] ?></td>
							<td><?php echo $datax['email'] ?></td>
						</tr>
						
					</tbody>
				<?php
				}
				?>
				</table>
			</div>
			

				<nav>
						<ul class="pagination">
							<li>
								<a href="" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
							<li>
								<a href="beranda-alumni-<?=$i ?>"><?php echo $i ?></a>
							</li>
							<?php endfor; ?>
				
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
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
					
