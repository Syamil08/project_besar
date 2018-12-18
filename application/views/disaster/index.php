<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Beranda</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/disaster.css">
	<!-- Akhir My Css -->
</head>
<body>
	
	<!-- Navbar -->
	
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
		  <a class="navbar-brand" href="#">DONASIKU</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link active" href="#">Beranda<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?php echo site_url('disaster/about')?>">Tentang Kami</a>
			<?php if (userdata()): ?>
				<li class="nav-item dropdown no-arrow">
		          <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
		            <i class="fa fa-user-circle fa-fw"></i>
		          </a>
		          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
		            <a href="#" class="dropdown-item"><?php echo userdata()->username?></a>
		            <?php if (userdata()->role=='petugas'): ?>
		            	<a href="<?php echo site_url('petugas/index')?>" class="dropdown-item">Dashboard</a>
		            <?php endif ?>
		            <?php if (userdata()->role=='donatur'): ?>
		            	<a href="<?php echo site_url('donatur/index')?>" class="dropdown-item">Dashboard</a>
		            <?php endif ?>
		            <div class="dropdown-divider"></div>
		            <a href="<?php echo site_url('user/logout')?>" class="dropdown-item">Logout</a>
		          </div>
		        </li>
		        <?php else: ?>
				<a href="<?php echo site_url('user/index')?>" class="nav-item btn btn-primary tombol" href="#">Bergabung</a>
			<?php endif ?>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->

	<!-- Slider -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url()?>assets/img/banner-1.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Membantu Sesama</h5>
		    <p>Ayo berdonasi, membantu mereka yang membutuhkan.</p>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url()?>assets/img/banner-2.png" class="card-img-top rounded-0">
	      <div class="carousel-caption d-none d-md-block">
		    <h5>Donasi</h5>
		    <p>Ayo berikan sedekah terbaik anda untuk tabungan akhirat.</p>
		  </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<!-- Akhir Slider -->

	<!-- Card -->

	<!-- <div class="album py-5">
		<div class="container">
			<div class="row news-wrap">
				<?php for($i=0; $i<3; $i++):?>
					<?php if (array_key_exists($i, $disaster)): ?>
						<?php $d = $disaster[$i]?>
						<div class="col-md-4 news-item">
							<div class="card mb-4 shadow-sm">
								<a href="<?php echo site_url('disaster/detail/'.$d->id)?>" style="text-decoration: none; color: black;">
									<img class="card-img-top" src="<?php echo base_url().'assets/img/'.$d->file_name?>" alt="" height="300px">
									<div class="card-body">
										<h5 class="card-text">
											<?php echo $d->title?>
										</h5>
										<p class="card-text">
											<?php $deskripsi = strip_tags($d->description);?>
											<?php echo substr($deskripsi,0,50)."...";?>
										</p>
										<?php
											$date1=date_create();
											$date2=date_create($d->deadline.' +1 day');
											$diff=date_diff($date1,$date2);
											$sisa  = $diff->d;
											$lewat = $diff->invert;
											if ($lewat == 1) {
												$sisa = $sisa * -1;
											}
											// membuat percabangan jika kurang dari 0 maka = 0
											if ($sisa <= 0) {
												$sisa = 0;
											}
										?>
										<div class="d-flex justify-content-between align-items-center footer">
											<span class="text-muted"><i class="fa fa-user"></i><?php echo $d->nn?><small style="margin-left: 50px;" class="text-muted"><?php echo $sisa." Hari Lagi"?></small></span>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php endif ?>
				<?php endfor ?>
			</div>
		</div>
	</div> -->
	
	<!-- Akhir Card -->
	
	<!-- Card 2 -->
	
	<!-- <div class="album">
		<div class="container">
			<div class="row news-wrap">
				<?php for($i=3; $i<count($disaster); $i++): ?>
					<?php $d = $disaster[$i];?>
					<div class="col-md-3 news-item">
						<div class="card mb-4 shadow-sm">
							<a href="<?php echo site_url('disaster/detail/'.$d->id)?>" style="text-decoration: none; color: black">
								<img class="card-img-top" src="<?php echo base_url().'assets/img/'.$d->file_name?>" height="200px">
								<div class="card-body">
									<div class="caption">
										<h6 class="card-text" style="font-size: 16px;">
										<?php echo $d->title?>
										</h6>
										<p class="card-text" style="font-size: 14px;">
										<?php echo substr($d->description,0,50)."...";?>
										</p>
									</div>
									<?php
										$date1=date_create();
										$date2=date_create($d->deadline.' +1 day');
										$diff=date_diff($date1,$date2);
										$sisa  = $diff->d;
										$lewat = $diff->invert;
										if ($lewat == 1) {
											$sisa = $sisa * -1;
										}
										// membuat percabangan jika kurang dari 0 maka = 0
										if ($sisa <= 0) {
											$sisa = 0;
										}
									?>
									<div class="d-flex justify-content-between align-items-center footer">
										<span class="text-muted size"><i class="fa fa-user"></i><?php echo $d->nn?><small style="margin-left: 30px;" class="text-muted"><?php echo $sisa." Hari Lagi"?></small></span>
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php endfor ?>
				</div>
			</div>
		</div>
	</div> -->

	
	<div class="album py-5">
		<div class="container">
			<div class="row news-wrap">
				<?php foreach ($disaster as $key => $d): ?>
					<div class="col-md-4 news-item">
						<div class="card mb-4 shadow-sm">
							<a href="<?php echo site_url('disaster/detail/'.$d->id)?>" style="text-decoration: none; color: black;">
								<img class="card-img-top" src="<?php echo base_url().'assets/img/'.$d->file_name?>" alt="" height="300px">
								<div class="card-body">
									<h5 class="card-text">
										<?php echo $d->title?>
									</h5>
									<p class="card-text">
										<?php $deskripsi = strip_tags($d->description);?>
										<?php echo substr($deskripsi,0,50)."...";?>
									</p>
									<?php
										$date1=date_create();
										$date2=date_create($d->deadline.' +1 day');
										$diff=date_diff($date1,$date2);
										$sisa  = $diff->d;
										$lewat = $diff->invert;
										if ($lewat == 1) {
											$sisa = $sisa * -1;
										}
										// membuat percabangan jika kurang dari 0 maka = 0
										if ($sisa <= 0) {
											$sisa = 0;
										}
									?>
									<div class="d-flex justify-content-between align-items-center footer">
										<span class="text-muted"><i class="fa fa-user"></i><?php echo $d->nn?><small style="margin-left: 50px;" class="text-muted"><?php echo $sisa." Hari Lagi"?></small></span>
									</div>
								</div>
							</a>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>


	<div class="container-fluid text-center">
		<p>
			<button class="btn btn-primary-custom my-2 load-more" type="button">Lihat Lainnya</button>
		</p>
	</div>

	<footer class="mainfooter" role="contentinfo">
	  <div class="footer-middle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-6">
	        <!--Column1-->
	        <div class="footer-pad">
	          <h4>Alamat</h4>
	          <address>
				Kampus Terpadu<br>Universitas Islam Indonesia<br>
				Jl. Kaliurang KM 14.5 Sleman, DIY
			</address>
	        </div>
	      </div>
	      <div class="col-md-4 col-sm-6">
	        <!--Column1-->
	        <div class="footer-pad">
	          <h4>Layanan</h4>
	          <ul class="list-unstyled">
	            <li><a href="#"></a></li>
	            <li><a href="<?php echo site_url('disaster/index')?>">Beranda</a></li>
	            <li><a href="<?php echo site_url('disaster/about')?>">Tentang Kami</a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="col-md-4 col-sm-6">
	        <!--Column1-->
	        <div class="footer-pad">
	          <h4>Kontak Developer</h4>
	          <ul class="list-unstyled">
	            <li><a href="#">SyamilBisyir@gmail.com</a></li>
	            <li><a href="#">NasutionUchiha@gmail.com</a></li>
	            <li><a href="#">MuhammadAlifa@gmail.com</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  </div>
	  <div class="footer-bottom">
	    <div class="container">
	      <div class="row">
	        <div class="col-xs-12">
	          <!--Footer Bottom-->
	          <p class="text-xs-center">&copy; Copyright 2018 - MOSDEV.COM</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>
	
	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>
</html>