

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


$sql1	= "SELECT id_alumni FROM tbkonfirmasi WHERE id_alumni='$_SESSION[id_alumni]'";
$result1 = mysqli_query($link,$sql1);
$count = mysqli_num_rows($result1);

if ($count > 0){
	echo "<script>window.alert('Anda Sudah Melakukan Konfirmasi Sebelumnya')</script>";
		echo "<meta http-equiv='refresh' content='0; url=info-reuni'>";
		}
		else{


$sql = "SELECT * FROM tbalumni  LEFT JOIN tbtahunlulus on tbalumni.id_lulus=tbtahunlulus.id_lulus where tbalumni.id_alumni = '$_SESSION[id_alumni]'";
$query = mysqli_query($link,$sql);
$data = mysqli_fetch_array($query);

?>


<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="">Konfirmasi</a>
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
						Hallo <strong> <?php echo $_SESSION['nama']?></strong> Upload Foto Struk Transfer
				</div>


			</div>
				<div class="row">
						<div class="col-lg-4">

							<form method="POST" action="alumni_panel/proses_pembayaran.php" enctype="multipart/form-data">
								

							
							<div class="form-group">
					            <tr>
					            <td><label>Nama Bank</label></td>
					            <td><input name="nama_bank" type="text"  class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label>Nama Pengirim</label></td>
					            <td><input name="atas_nama" type="text"   class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
					          <div class="form-group">
					            <tr>
					            <td><label>Nominal Transfer</label></td>
					            <td><input name="nominal" type="number"   class="form-control"  required="required"/></td>
					         	</tr>
					         </div>


					          <div class="form-group">
					            <tr>
					            <td><label>Upload Bukti Transfer</label></td>
					            <td><input name="gambar" type="file"   class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
					         
					         <div class="form-group">
					            <tr>
					            <td><label></label></td><br>
					            <td> <button class="btn btn-info" name="upload" type="submit">Daftar</button>
					            	 <a class="btn btn-info" href="beranda-alumni">Kembali</a>
					            </td>
					         	</tr>
					         </div>
							
						</div>
						<div class="col-lg-4">
							
							<div class="alert alert-info" role="alert">
								<p>Pembayaran dilakukan ke rekening masing masing koordinator</p>
								<p>Input Nama bank sesuai nama bank pengirim</p>
								<p>Input Nama Pengirim sesuai nama rekening pengirim</p>
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

<?php
}
?>
	