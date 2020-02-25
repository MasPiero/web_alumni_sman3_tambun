
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
					<a href="beranda-alumni">Setting</a>
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
						<strong>Panel Setting</strong>
				</div>

				

			</div>
				<div class="row">
						<div class="col-lg-4">
								
							 <form method="POST" action="alumni_panel/ubah_password.php">
               
                     <div class="form-group">
                      <label class="control-label">Password Lama</label>
                      <input class="form-control" type="Password" placeholder="Masukan Password Lama" name="password_lama" autofocus required="">
                     </div>
                      <div class="form-group">
                      <label class="control-label">Password Baru</label>
                      <input class="form-control" type="Password" name="password_baru" placeholder="Masukan Password Baru" required="" >
                     </div>
                      <div class="form-group">
                      <label class="control-label"> Konfirmasi Password Baru</label>
                      <input class="form-control" type="Password" name="password_baru1" placeholder="Ulangi Password Yang Sama" required="" >
                     </div>
                     <div class="form-group">
                      
                             <button class="btn btn-info" type="submit">Ubah </button>
                            
                            
                          </div>
                      </form>
							
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
					
