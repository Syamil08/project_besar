<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donasi</title>
	
	<!-- My Fonts -->
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
	<!-- Akhir My Css -->

</head>
<body>

	<!-- Navbar -->
	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light">
		<div class="container">
		  <a class="navbar-brand" href="#">DONASIKU</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav ml-auto">
		      <a class="nav-item nav-link active" href="<?php echo site_url('disaster/index')?>">Beranda<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?php echo site_url('disaster/about')?>">Tentang Kami</a>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->	
		<div class="container" style="margin-top: 100px">
			<?php $this->load->view('messages/messages') ?>
			<h2 style="margin-bottom: 0;"><b><?php echo $detail->title?></b></h2>
			<p><?php echo date('j F Y', strtotime($detail->created_at)) ?></p>
			<dic class="row">
				<div class="col-8">
					<div class="img-responsive">
						  <img class="card-img-top" src="<?php echo base_url().'assets/img/'.$detail->file_name?>"><br><br>
						  <?php echo $detail->description?>
				</div>
				</div>
				<!-- Menentukan sisa hari untuk donasi -->
				<?php
					$date1=date_create();
					$date2=date_create($detail->deadline.' +1 day');
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
				<div class="col-4" style="background-color: ">
					<h2><?php echo count($donasi)." "?>Donatur Terkumpul</h2> <!-- $donasi untuk menghitung seluruh row yang ada di table -->
					<p>Ayo segera berikan donasi Anda, donasi Anda sangat berarti bagi mereka.</p>
					<?php
						if ($sisa > 0) {
							echo anchor(site_url('donasi/doDonasi/'.$detail->id),'DONASI SEKARANG', 'class="btn btn-success btn-block"');
						} else {
							echo '<a class="btn btn-secondary btn-block text-white">WAKTU HABIS</a>';
						}
					?>
					<br>
					<p><?php echo $sisa." Hari Lagi"?></p>


				</div>
			</dic>
		</div>
		
			<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
			<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>	
	

</body>
</html>