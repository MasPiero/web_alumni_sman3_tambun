<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="">Beranda</a>
					<span>| |</span>
				</li>
				<li>Alumni</li>
			</ul>
		</div>
	</div>



		
		<div class="container">

			<?php
				include "koneksi.php";

				$sql = "SELECT nama FROM tbalumni where id_lulus = 1";
						$result = mysqli_query($link,$sql);
						$count = mysqli_num_rows($result);

				$sql2 = "SELECT nama FROM tbalumni where id_lulus = 2";
						$result2 = mysqli_query($link,$sql2);
						$count2 = mysqli_num_rows($result2);
				$sql3 = "SELECT nama FROM tbalumni where id_lulus = 3";
						$result3 = mysqli_query($link,$sql3);
						$count3 = mysqli_num_rows($result3);
				$sql4 = "SELECT nama FROM tbalumni where id_lulus = 4";
						$result4 = mysqli_query($link,$sql4);
						$count4 = mysqli_num_rows($result4);
				$sql5 = "SELECT nama FROM tbalumni where id_lulus = 5";
						$result5 = mysqli_query($link,$sql5);
						$count5 = mysqli_num_rows($result5);
				$sql6 = "SELECT nama FROM tbalumni where id_lulus = 6";
						$result6 = mysqli_query($link,$sql6);
						$count6 = mysqli_num_rows($result6);
				$sql7 = "SELECT nama FROM tbalumni where id_lulus = 7";
						$result7 = mysqli_query($link,$sql7);
						$count7 = mysqli_num_rows($result7);
				$sql8 = "SELECT nama FROM tbalumni where id_lulus = 8";
						$result8 = mysqli_query($link,$sql8);
						$count8 = mysqli_num_rows($result8);
				$sql9 = "SELECT nama FROM tbalumni where id_lulus = 9";
						$result9 = mysqli_query($link,$sql9);
						$count9 = mysqli_num_rows($result9);
				$sql10 = "SELECT nama FROM tbalumni where id_lulus = 10";
						$result10 = mysqli_query($link,$sql10);
						$count10 = mysqli_num_rows($result10);
				$sql11 = "SELECT nama FROM tbalumni where id_lulus = 11";
						$result11 = mysqli_query($link,$sql11);
						$count11 = mysqli_num_rows($result11);
				$sql12 = "SELECT nama FROM tbalumni where id_lulus = 12";
						$result12 = mysqli_query($link,$sql12);
						$count12 = mysqli_num_rows($result12);
				$sql13 = "SELECT nama FROM tbalumni where id_lulus = 13";
						$result13 = mysqli_query($link,$sql13);
						$count13 = mysqli_num_rows($result13);
				$sql14 = "SELECT nama FROM tbalumni where id_lulus = 14";
						$result14 = mysqli_query($link,$sql14);
						$count14 = mysqli_num_rows($result14);

			?>
<div class="grid_3 grid_5 wthree">
				<h3>Alumni Terdaftar</h3>
				<div class="col-md-6 agileits-w3layouts">
					<p></p>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Angkatan || Tahun Lulus</th>
								<th>Total</th>
								<th>Koordinator</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1 || 2006</td>
								<td>
									<span class="badge badge-info"><?php echo "$count" ?> Alumni</span>
								</td>
								<td>Sarah</td>
							</tr>
							<tr>
								<td>2 || 2007</td>
								<td>
									<span class="badge"><?php echo "$count2" ?> Alumni</span>
								</td>
								<td>Mustafid</td>
							</tr>
							<tr>
								<td>3 || 2008</td>
								<td>
									<span class="badge"><?php echo "$count3" ?> Alumni</span>
								</td>
								<td>Rovi Herlianto</td>
							</tr>
							<tr>
								<td>4 || 2009</td>
								<td>
									<span class="badge"><?php echo "$count4" ?> Alumni</span>
								</td>
								<td>Aprilia</td>
							</tr>
							<tr>
								<td>5 || 2010</td>
								<td>
									<span class="badge"><?php echo "$count5" ?> Alumni</span>
								</td>
								<td>Diah Wulaningsih</td>
							</tr>
							<tr>
								<td>6 || 2011</td>
								<td>
									<span class="badge"><?php echo "$count6" ?> Alumni</span>
								</td>
								<td>Andhika Firmansyah</td>
							</tr>
							<tr>
								<td>7 || 2012</td>
								<td>
									<span class="badge"><?php echo "$count7" ?> Alumni</span>
								</td>
								<td>Bella Aprillia</td>
							</tr>
							<tr>
								<td>8 || 2013</td>
								<td>
									<span class="badge"><?php echo "$count8" ?> Alumni</span>
								</td>
								<td>Indria Septiani</td>
							</tr>
							<tr>
								<td>9 || 2014</td>
								<td>
									<span class="badge"><?php echo "$count9" ?> Alumni</span>
								</td>
								<td>Armelia</td>
							</tr>
							<tr>
								<td>10 || 2015</td>
								<td>
									<span class="badge"><?php echo "$count10" ?> Alumni</span>
								</td>
								<td>Diana Asuti</td>
							</tr>
							<tr>
								<td>11 || 2016</td>
								<td>
									<span class="badge"><?php echo "$count11" ?> Alumni</span>
								</td>
								<td>Singgih Basundari</td>
							</tr>
							<tr>
								<td>12 || 2017</td>
								<td>
									<span class="badge"><?php echo "$count12" ?> Alumni</span>
								</td>
								<td>Mikhael Chris</td>
							</tr>
							<tr>
								<td>13 || 2018</td>
								<td>
									<span class="badge"><?php echo "$count13" ?> Alumni</span>
								</td>
								<td>Mayang</td>
							</tr>
							<tr>
								<td>14 || 2019</td>
								<td>
									<span class="badge"><?php echo "$count14" ?> Alumni</span>
								</td>
								<td>Muhammad Sidiq</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="clearfix"> </div>
			</div>

										
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>