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
					<a href="">Beranda</a>
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
					   <form action="alumni_panel/ubah_foto.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
					<div class="col-md-6 w3-agileits">
					<div class="list-group list-group-alternate">
						<a class="list-group-item">
							<i class="ti ti-email"></i> <img src="alumni_panel/foto_alumni/<?php echo $data['foto'] ?>" width="350" height="350" >
						 <div class="form-group">
                     
                      <input class="form-control" name="gambar" type="file" required="">
                   
                     </div>
                       <div class="form-group">
                          <div class="col-lg-2">
                             <button class="btn btn-info" name="upload" type="submit">Ubah Foto</button>
                          </div>
                        </div>
						</a>
							</form>
						
					</div>	
					</div>
					<div class="col-md-6 w3-agileits">

					<div class="list-group list-group-alternate">	
							<form action="alumni_panel/ubah_data.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
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
						<?php
						                              include "koneksi.php";

						                            echo "<select class='form-control'  name='id_lulus'>";
						                            $sqlx = "SELECT * FROM tbtahunlulus";
						                            $anu = mysqli_query($link,$sqlx);

						                           
						                            while($w=mysqli_fetch_array($anu))
						                              {

						                                if($data['id_lulus'] == $w['id_lulus']){
						                                 echo "<option value=$w[id_lulus] selected>$w[tahun_lulus]</option>";        
						                                  }
						                                  else{  
						                                   echo "<option value=$w[id_lulus]>$w[tahun_lulus]</option>"; 
						                                  }
						                            }

						                             echo "</select>";
						                            ?>
						</div>
						<div class="input-group w3_w3layouts col-xs-12">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir'] ?>" aria-describedby="basic-addon2">
						</div>
						<div class="input-group w3_w3layouts col-xs-12">
						<button class="btn btn-info" name="upload" type="submit">Ubah Data</button>
						</div>
						
                         </form>
						


					</div>	
					</div>


						<div class="col-md-12 w3-agileits">
					<div class="alert alert-success" role="alert">
					<strong>Informasi lanjut</strong>
				</div>
			</div>
						



				</div>

				<div class="clearfix"> </div>

			</div>
					
</div>