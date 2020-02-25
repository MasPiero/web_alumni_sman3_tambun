
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

$sql = "SELECT * FROM tbregisreuni left join tbalumni on tbregisreuni.id_alumni = tbalumni.id_alumni LEFT JOIN tbkonfirmasi on tbalumni.id_alumni= tbkonfirmasi.id_alumni where tbalumni.id_lulus = '$_SESSION[id_lulus]'";
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
						Halo <strong><?php echo $data['nama'] ?></strong> ,Ini adalah Data Peserta Reuni Yang sudah melunasi pembayaran
				</div>

				
			<div class="bs-docs-example">
				<table class="table">
					<thead>
						<tr>
							
							<th>Nama Alumni</th>
							<th>Jmlh Kel</th>
							<th>Jumlah Bayar</th>
							<th>Nama Bank </th>
							<th>Status</th>
						</tr>
					</thead>
					<?php


				$jumlahdataperhalaman = 10;
				$result = mysqli_query($link,"SELECT * FROM tbregisreuni left join tbalumni on tbregisreuni.id_alumni = tbalumni.id_alumni LEFT JOIN tbkonfirmasi on tbalumni.id_alumni= tbkonfirmasi.id_alumni where tbalumni.id_lulus = '$_SESSION[id_lulus]'");
				$jumlahdata= mysqli_num_rows($result);
				$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
					if(isset($_GET['p'])){
						$halamanaktif = $_GET['p'];
					} else {
						$halamanaktif = 1;
					}
				
				$awaldata = ($jumlahdataperhalaman * $halamanaktif)- $jumlahdataperhalaman;

				$sqlx = "SELECT * FROM tbregisreuni left join tbalumni on tbregisreuni.id_alumni = tbalumni.id_alumni LEFT JOIN tbkonfirmasi on tbalumni.id_alumni= tbkonfirmasi.id_alumni where tbalumni.id_lulus = '$_SESSION[id_lulus]' order by status DESC LIMIT $awaldata , $jumlahdataperhalaman";

				


				$queryx = mysqli_query($link,$sqlx);
				$no=0;
				while($datax = mysqli_fetch_array($queryx)){
					
				?>
					<tbody>
						<tr>
							
							<td><?php echo $datax['nama'] ?></td>
							<td><?php echo $datax['jumlah_dibawa']. " Orang" ?></td>
							<td><?php echo "Rp " . number_format($datax['nominal']) ?></td>
							<td><?php echo $datax['nama_bank'] ?></td>
	
							<td>
								<?php
									if ($datax['status_pembayaran'] == "Sudah Bayar"){

										 echo $a = "<span class='badge badge-primary'>Lunas</span>";
									} else {
											echo	$a = "<span class='badge badge-default'>Belum Lunas /Verifikasi </span>";
									}
								?>
					            	
					            	
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
								
			
<?php
	include "../koneksi.php";

      
       $ada = mysqli_query($link,"SELECT sum(tbkonfirmasi.nominal) as t FROM tbkonfirmasi left join tbalumni on tbkonfirmasi.id_alumni = tbalumni.id_alumni where tbkonfirmasi.status = 'V' and tbalumni.id_lulus = '$_SESSION[id_lulus]'");
       $hasil = mysqli_fetch_assoc($ada);
      


?>
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
					
