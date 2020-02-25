

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
					<a href="beranda.html">Profil</a>
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
								Hallo <strong> <?php echo $_SESSION['nama']?></strong> Isi data dengan lengkap
						</div>


					</div>
				<div class="row">
						<div class="col-lg-4">

							<form action="alumni_panel/ubah_foto.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
								
							
							<div class="form-group">
					            <tr>
					           	<td> <img src="alumni_panel/foto_alumni/<?php echo $data['foto'] ?>" width="350" height="350" ></td>
					         	</tr>
					         </div>
					          <div class="form-group col-lg-9">
					          	 <tr>
                    		  	<td><input class="form-control" name="gambar" type="file" required=""></td>
                    		  </tr>
                   			  </div>
                   			   <div class="form-group col-lg-4">
                   			   	<tr>
                   				  <td> <button class="btn btn-info" name="upload" type="submit">Ubah Foto</button></td>
                   			   </tr>  
					           </div>
					       </form>
							
						</div>
						<div class="col-lg-4">
							<form action="alumni_panel/ubah_data.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
							
							<div class="form-group">
					            <tr>
					            <td><label>Nama</label></td>
					            <td><input type="text" class="form-control" value="<?php echo $data['nama'] ?>" readonly placeholder="Masukan Nama" aria-describedby="basic-addon2"></td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label>Email</label></td>
					            <td><input type="text" class="form-control" value="<?php echo $data['email'] ?>" readonly placeholder="Masukan Email" aria-describedby="basic-addon2"></td>
					         	</tr>
					         </div>
					       <div class="form-group">
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

							<div class="form-group">
							   <tr>
							   <td><label>No HP</label></td>
							   <td><input type="text" class="form-control" name="no_telp" placeholder="Tempat Lahir" value="<?php echo $data['no_telp'] ?>" aria-describedby="basic-addon2"></td>
								</tr>
							</div>

							<div class="form-group">
							   <tr>
							   <td><label>Tempat Lahir</label></td>
							   <td><input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir'] ?>" aria-describedby="basic-addon2"></td>
								</tr>
							</div>

					          <div class="form-group" >
					            <tr>
					            <td><label></label></td><br>
					            <td> <button class="btn btn-info"name="upload" type="submit">Ubah Data</button>
					            </td>
					         	</tr>
					         </div>
					    	 </form>
						</div>
				</div> <!-- rowww -->
		</div> <!-- 12 -->
	</div> <!-- end row -->				
</div> <!-- end container -->	

<?php
}
?>

	