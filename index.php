<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<?php
include"koneksi.php";
session_start();
if(empty($_SESSION['id_alumni'])){

  $log = "<a href='login-alumni'><span class='fa fa-sign-in' aria-hidden='true'></span>Login</a>
";
  
}
else{
	$log ="<a href='logout.php'><span class='fa fa-sign-out' aria-hidden='true'></span>Logout</a>";
}
?>





<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Ikatan Keluarga Alumni SMAN 3 Tambun Selatan</title>
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>	

<body>
	<!-- header -->
	<div class="header-top">
		<div class="container">
			
			<div class="bottom_header_right">
				<div class="bottom-social-icons">
					<a class="facebook" target="_blank" href="https://www.facebook.com/groups/ikatanalumnisma3">
						<span class="fa fa-facebook"></span>
					</a>
					<a class="instagram" target="_blank" href="https://www.instagram.com/reuniakbargs/">
						<span class="fa fa-instagram"></span>
					</a>
					
					<a class="linkedin" href="#">
						<span class="fa fa-twitter"></span>
					</a>
				</div>
				<div class="header-top-righ">
					
						<?php echo $log ?>
				</div>
				<div class="clearfix"> </div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">

							<h1>
								<img src="images/logo1.png" width="50" height="40" class="logo-img" alt=""></span>Ikatan Keluarga Alumni
								<label>SMAN 3 TAMBUN SELATAN</label>
							</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav class="link-effect-2" id="link-effect-2">
							<ul class="nav navbar-nav">
								<li class="active">
									<a href="beranda" class="effect-3">Beranda</a>
								</li>
								<li>
									<a href="profil-sekolah" class="effect-3">Profil</a>
								</li>
								<li>
									<a href="beranda-alumni" class="effect-3">Info Alumni</a>
								</li>
								<li>
									<a href="loker" class="effect-3">Loker</a>
								</li>
								<li>
									<a href="galeri" class="effect-3">Info Reuni</a>
								</li>
								<li>
									<a href="galeri" class="effect-3">Gallery</a>
								</li>
								<li>
									<a href="alumni" class="effect-3">Alumni</a>
								</li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<br>
	<!-- banner -->
	<?php
	include "Isi.php";

	?>
	
	<!-- middle -->
	
	<!-- footer -->
	<div class="mkl_footer">
		
		<div class="footer-copy-right">
			<div class="container">
				<div class="allah-copy">
					<p>© 2019 IKA SMAN 3 TAMSEL. | Design by
						<a href="http://instagram.com/siipiero" target="_blank">Siipiero</a>
					</p
					>
				</div
				>
				<div class="footercopy-social">
					<ul>
						<li>
							<a href="https://www.facebook.com/groups/ikatanalumnisma3">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-rss"></span>
							</a>
						
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- stats numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //stats numscroller-js-file -->

	<!-- Flexslider-js for-testimonials -->
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 1,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 1
					},
					tablet: {
						changePoint: 768,
						visibleItems: 1
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //Flexslider-js for-testimonials -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>