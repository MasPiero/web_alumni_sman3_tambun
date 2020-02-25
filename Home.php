

<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h6>Selamat Datang</h6>
						<h3>Para
							<span>Alumni </span>
							 SMAN 3 Tambun Selatan.
						</h3>
						<p>Tetap terhubung melawan jarak dan waktu.</p>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h6></h6>
						<h3>Temukan
							<span>Teman Sebangkumu</span>
						</h3>
						<p>bercerita dan tertawa.</p>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h6>Waktunya</h6>
						<h3>Berbagi
							<span>Pengalaman</span> </h3>
						<p>Tentang apa yang kalian rasakan.</p>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h6></h6>
						<h3>Suka
							<span>Duka</span>
						</h3>
						<p>Menjadi bagian dalam kenangan.</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!-- about -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>S</span>elamat Datang
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4>Tentang
						<span>IKA SMAN 3 Tambun</span>
					</h4>
					<p></p>
					<p>Di bentuk untuk kalian yang mencari teman sekolah kalian. Daftarkan diri kalian agar teman kalian dapat menemukan kalian dengan mudah.</p>
				
					

				</div>




				<!-- Stats-->
				<?php
						include "koneksi.php";

						$sql = "SELECT nama FROM tbalumni";
						$result = mysqli_query($link,$sql);
						$count = mysqli_num_rows($result);

						$sql1 = "SELECT tahun_lulus FROM tbtahunlulus";
						$result1 = mysqli_query($link,$sql1);
						$count1 = mysqli_num_rows($result1);
					?>
				<div class="col-md-6 stats-info-agile">
					<div class="col-xs-6 stats-grid stat-border">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?= $count;?>' data-delay='.5' data-increment="1">768</div>
						<p>Alumni Terdaftar</p>
					</div>
					<div class="col-xs-6 stats-grid">
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?= $count1;?>' data-delay='5' data-increment="1">14</div>
						<p>Angkatan Terdaftar</p>
					</div>
					
					<div class="clearfix"></div>
					<div class="child-stat">
						<div class="col-xs-6 stats-grid stat-border border-st2">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='0' data-delay='.5' data-increment="1">22</div>
							<p>Peserta Reuni</p>

						</div>
						<div class="col-xs-6 stats-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='37' data-delay='3' data-increment="1">20</div>
							<p>Panitia Reuni</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<br>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	
	<!-- news -->
	
	</div>