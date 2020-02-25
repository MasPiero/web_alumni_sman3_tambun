
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

$sql = "SELECT * FROM tbalumni ";
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
						Halo <strong><?php echo $data['nama'] ?></strong> , Selamat Datang di Panel Administrator
				</div>

				<h3 class="typoh2">Angkatan : 1 s.d 14</h3>
			<p></p>
			<div class="bs-docs-example">
				<table class="table">
					<thead>
						<tr>
							
							<th>Nama Lengkap</th>
							<th>Thn Lulus</th>
							<th>jml. Kel</th>
							<th>Kendaraan</th>
							<th>status</th>
							<th>Nominal</th>
						</tr>
					</thead>
					<?php


				$jumlahdataperhalaman = 100;
				$result = mysqli_query($link,"SELECT * FROM tbregisreuni left join tbalumni on tbregisreuni.id_alumni = tbalumni.id_alumni left join tbtahunlulus on tbalumni.id_lulus = tbtahunlulus.id_lulus left join tbkonfirmasi on tbregisreuni.id_alumni=tbkonfirmasi.id_alumni");
				$jumlahdata= mysqli_num_rows($result);
				$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
					if(isset($_GET['p'])){
						$halamanaktif = $_GET['p'];
					} else {
						$halamanaktif = 1;
					}
				
				$awaldata = ($jumlahdataperhalaman * $halamanaktif)- $jumlahdataperhalaman;

				$sqlx = "SELECT * FROM tbregisreuni left join tbalumni on tbregisreuni.id_alumni = tbalumni.id_alumni left join tbtahunlulus on tbalumni.id_lulus = tbtahunlulus.id_lulus left join tbkonfirmasi on tbregisreuni.id_alumni=tbkonfirmasi.id_alumni LIMIT $awaldata , $jumlahdataperhalaman";

				


				$queryx = mysqli_query($link,$sqlx);
			
				while($datax = mysqli_fetch_array($queryx)){
					$no++;
				?>
					<tbody>
						<tr>
							
							<td><?php echo $datax['nama'] ?></td>
							<td><?php echo $datax['tahun_lulus'] ?></td>
							<td><?php echo $datax['jumlah_dibawa'] . " Orang" ?></td>
							<td><?php echo $datax['kendaraan'] ?></td>
							<td><?php echo $datax['status_pembayaran'] ?></td>
							<td><?php echo "Rp.  ". number_format($datax['nominal']) ?></td>
							<td><a class = "btn btn-info" href="beranda-data-all-<?=$i ?>">Detail</a></td>
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
								<a href="beranda-data-all-<?=$i ?>"><?php echo $i ?></a>
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


			<?php
	include "../koneksi.php";

      
       $ada = mysqli_query($link,"SELECT sum(nominal) as t FROM tbkonfirmasi  where tbkonfirmasi.status = 'V'");
       $hasil = mysqli_fetch_assoc($ada);
      


?>
      

			
			
				<div class="row">
						<div class="col-lg-4">


								 <div class="tittle-style">

					<br>
						<center><p>Total Dana Masuk :  <?php echo "Rp " . number_format($hasil['t']) ?></p></center>
						
		</div>
							
							
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
					
