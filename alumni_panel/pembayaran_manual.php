

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
						Hallo <strong> <?php echo $_SESSION['nama']?> !!</strong> Fitur ini memungkinkan kalian melayani pembayaran secara manual
				</div>


			</div>
				<div class="row">
						<div class="col-lg-4">

							<form method="POST" action="alumni_panel/manual.php" enctype="multipart/form-data">
								

							
							 <div class="form-group">
                          <label class="col-lg control-label" for="id_lulus">Nama Peserta</label>
                          <div class="col-lg">
                            <?php
                              include "../koneksi.php";

                            echo "<select class='form-control'  name='id_alumni'>";
                            $tampil = mysqli_query($link,"SELECT * FROM tbregisreuni left join tbalumni on tbregisreuni.id_alumni=tbalumni.id_alumni where tbregisreuni.status_pembayaran = 'Belum Bayar'");
                           
                            while($w=mysqli_fetch_array($tampil))
                              {


                                if($dat1a['id_lulus'] == $w['id_alumni']){
                                 echo "<option value=$w[id_alumni] selected>$w[nama]</option>";        
                                  }
                                  else{  
                                   echo "<option value=$w[id_alumni]>$w[nama]</option>"; 
                                  }
                            }

                             echo "</select>";
                            

                            ?></td>
                          </div>
                        </div>
					         <div class="form-group">
					            <tr>
					            <td><label>Nominal</label></td>
					            <td><input name="nominal" type="number"  class="form-control"  required="required"/></td>
					         	</tr>
					         </div>
					         <div class="form-group">
					            <tr>
					            <td><label></label></td><br>
					            <td> 
					            	 <button class="btn btn-info" name="bayar" type="submit">Bayar</button>
					            </td>
					         	</tr>
					         </div>
							
						</div>
						
					     </form>


						
				</div>
		</div>
	</div> <!-- end row -->				
</div> <!-- end container -->	

<?php
}
?>
	