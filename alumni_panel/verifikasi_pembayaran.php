
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

$sql = "SELECT * tbkonfirmasi LEFT JOIN tbalumni on tbkonfirmasi.id_alumni = tbalumni.id_alumni where tbalumni.id_lulus = '$_SESSION[id_lulus]' and tbkonfirmasi.status = 'BV'";
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
						Halo <strong><?php echo $data['nama'] ?></strong> ,Kamu Dapat Memverifikasi Pembayaran Reuni Teman Kamu, Mohon Di teliti ya
				</div>

				
			<div class="bs-docs-example">
				<table class="table">
					<thead>
						<tr>
							
							<th>Nama Alumni</th>
							<th>Bank</th>
							<th>Nominal Transfer</th>
							<th>foto struk</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<?php


				$jumlahdataperhalaman = 10;
				$result = mysqli_query($link,"SELECT * FROM tbkonfirmasi LEFT JOIN tbalumni on tbkonfirmasi.id_alumni = tbalumni.id_alumni where tbalumni.id_lulus = '$_SESSION[id_lulus]' and tbkonfirmasi.status = 'BV'");
				$jumlahdata= mysqli_num_rows($result);
				$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
					if(isset($_GET['p'])){
						$halamanaktif = $_GET['p'];
					} else {
						$halamanaktif = 1;
					}
				
				$awaldata = ($jumlahdataperhalaman * $halamanaktif)- $jumlahdataperhalaman;

				$sqlx = "SELECT * FROM tbkonfirmasi left join tbalumni on tbkonfirmasi.id_alumni = tbalumni.id_alumni  where tbalumni.id_lulus = '$_SESSION[id_lulus]' and tbkonfirmasi.status = 'BV' order by nama ASC LIMIT $awaldata , $jumlahdataperhalaman";

				


				$queryx = mysqli_query($link,$sqlx);
				$no=0;
				while($datax = mysqli_fetch_array($queryx)){
					
				?>
					<tbody>
						<tr>
							
							<td><?php echo $datax['nama'] ?></td>
							<td><?php echo $datax['nama_bank'] ?></td>
							<td><?php echo "Rp " . number_format($datax['nominal']) ?></td>
							<td><a href ="alumni_panel/foto_konfirmasi/<?php echo $datax['bukti_trf'] ?>" target="_blank"><img src="alumni_panel/foto_konfirmasi/<?php echo $datax['bukti_trf'] ?>" width="100" height="100"> </a> </td>
							 <td> 
					            	 <a class="btn btn-info" href="alumni_panel/proses_verifikasi.php?id_alumni=<?php echo $datax['id_alumni'] ?>" onclick="return confirm('Sudah Cek Mutasi Belum?')">Verifikasi</a>
					            </td>
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
					
