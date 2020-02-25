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
					<a href="beranda.html">Beranda</a>
					<span>| |</span>
				</li>
				<li>Panel Alumni</li>
			</ul>
		</div>
	</div>
<div class="container">
<div class="grid_3 grid_5 wthree">
				
				<?php

					include "sidebar.php";
				?>


				<div class="col-md-9 w3-agileits">
					<div class="alert alert-success" role="alert">
					<strong><?php echo $data['nama'] ?></strong> Jangan Lupa untuk melengkapi data.
				</div>
					<div class="col-md-6 w3-agileits">
					<div class="list-group list-group-alternate">
						<a class="list-group-item">
							<i class="ti ti-email"></i> <img src="alumni_panel/foto_alumni/<?php echo $data['foto'] ?>" width="350" height="350" > </a>
						
					</div>	
					</div>
					<div class="col-md-6 w3-agileits">

					<div class="list-group list-group-alternate">	

						<div class="input-group w3_w3layouts col-xs-12">
								<div class="alert alert-info" role="alert">
					<strong>Infomasi Dasar</strong>
				</div>
						<label>Nama</label>
						<input type="text" class="form-control" value="<?php echo $data['nama'] ?>" readonly placeholder="Masukan Nama" aria-describedby="basic-addon2">
						</div>
						<div class="input-group w3_w3layouts col-xs-12">
						<label>Email</label>
						<input type="text" class="form-control" value="<?php echo $data['email'] ?>" readonly placeholder="Masukan Email" aria-describedby="basic-addon2">
						</div>
						<div class="input-group w3_w3layouts col-xs-12">
						<label>Tahun Lulus</label>
						<input type="text" class="form-control" value="<?php echo $data['tahun_lulus'] ?>" placeholder="Tahun Lulus" aria-describedby="basic-addon2">
						</div>
						<div class="input-group w3_w3layouts col-xs-12">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir'] ?>" aria-describedby="basic-addon2">
						</div>




						


					</div>	
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
					
</div>