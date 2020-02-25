<br>
<div class="col-lg-3">
					
					<div class="list-group list-group-alternate">
						<a href="beranda-alumni" class="list-group-item">	
							<i class="beranda-alumni"></i> Beranda </a>
						<a href="profil-alumni" class="list-group-item">
							<i class="ti ti-email"></i> Profil </a>
						<a href="info-reuni" class="list-group-item">
							<i class="ti ti-eye"></i> Info Reuni </a>
						<a href="pendaftaran-reuni" class="list-group-item">
						
							<i class="ti ti-headphone-alt"></i> Pendaftaran Reuni </a>
						<a href="konfirmasi-pembayaran" class="list-group-item">
						
							<i class="ti ti-comments"></i> Konfirmasi Pembayaran </a>
						<a href="setting" class="list-group-item">
							
							<i class="ti ti-bookmark"></i> Setting </a>
						<a href="logout.php" class="list-group-item">
							
							<i class="ti ti-bell"></i> Keluar </a>
					</div>

				<?php
					session_start();
					 if($_SESSION[level_admin]==2){

					 	include 'sidebar_koordinator.php';
					 }

					 	 	elseif($_SESSION[level_admin]==3){

					 	include 'sidebar_admin.php';

					 }

					
				?>
</div>
