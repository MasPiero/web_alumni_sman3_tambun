

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
					<a href="">Pendaftaran Reuni</a>
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
						Hallo <strong> <?php echo $_SESSION['nama']?> !!</strong> yuk jadi bagian dalam acara Reuni.
				</div>


			</div>
				<div class="row">
						<div class="col-lg-4">

							<form method="POST" action="alumni_panel/proses_pendaftaran.php" enctype="multipart/form-data">
								

							<div class="form-group" hidden="">
					            <tr>
					            <td><label>id</label></td>
					            <td><input name="nama" type="text" value="<?php echo $_SESSION['id_alumni'] ?>" readonly class="form-control"  required="required"/></td>
					         	</tr>
					         </div>	
							<div class="form-group">
					            <tr>
					            <td><label>Nama Lengkap</label></td>
					            <td><input name="nama" type="text" value="<?php echo $data['nama'] ?>" readonly class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label>Email</label></td>
					            <td><input name="nama" type="text" readonly value="<?php echo $data['email'] ?>" class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label>No HP</label></td>
					            <td><input name="no_telp" type="text" readonly value="<?php echo $data['no_telp'] ?>" class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
							
						</div>
						<div class="col-lg-4">
							
							<div class="form-group">
					            <tr>
					            <td><label>Keluarga yang dibawa</label></td>
					            <td><input name="jumlah_dibawa" type="number" class="form-control" placeholder="Max : 2  Orang (input 0 bila dtang sendiri)"  required="required"/></td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label>Kendaraan</label></td>
					            <td>
					            	<select class="form-control" name="kendaraan">
									<option value="Motor">Motor</option>
									<option value="Mobil">Mobil</option>
									<option value="Umum">Angkutan Umum</option>
									</select>
					            </td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label></label></td><br>
					            <td> <button class="btn btn-info" name="daftar" type="submit">Daftar</button>
					            	 <a class="btn btn-info" href="beranda-alumni">Kembali</a>
					            </td>
					         	</tr>
					         </div>
					     </form>


						</div>
				</div>
		</div>
	</div> <!-- end row -->				
</div> <!-- end container -->	

<?php
}
?>
	