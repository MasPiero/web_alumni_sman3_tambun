<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="beranda.html">Beranda</a>
					<span>| |</span>
				</li>
				<li>Registrasi Alumni</li>
			</ul>
		</div>
	</div>


	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>R</span>egistrasi
					<span>A</span>lumni
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="register-form">
				<form action="ProsesRegistrasi.php" method="post">
					<div class="fields-grid">
						<label class="header">Isikan Biodata Kamu</label>
						<div class="styled-input">
							<input type="text" placeholder="Masukan Nama Lengkap" name="nama" required="">
						</div>
						
						<div class="styled-input agile-styled-input-top">
							<select class="category2" name="jk" required="">
								<option value="">Jenis Kelamin</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
						<div class="styled-input">
							<input type="email" placeholder="E-mail" name="email" required="">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Masukan Password" name="password1" required="">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Masukan Password Lagi" name="password2" required="">
						</div>
						<div class="styled-input agile-styled-input-top" >
							<select class="category2" name="id_lulus" required="">
								<option value="">-- Tahun Lulus --</option>
								<option value="14">2019</option>
                              <option value="13">2018</option>
                              <option value="12">2017</option>
                              <option value="11">2016</option>
                              <option value="10">2015</option>
                              <option value="9">2014</option>
                              <option value="8">2013</option>
                              <option value="7">2012</option>
                              <option value="6">2011</option>
                              <option value="5">2010</option>
                              <option value="4">2009</option>
                              <option value="3">2008</option>
                              <option value="2">2007</option>
                              <option value="1">2006</option>
							</select>
							<span></span>
						</div>
						
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>