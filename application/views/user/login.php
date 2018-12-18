<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
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
		      <a class="nav-item nav-link active" href="<?php echo site_url('disaster/index')?>">Beranda<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?php echo site_url('disaster/about')?>">Tentang Kami</a>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->

	<!-- Awal Form Login -->
	<?php if ($this->session->flashdata('msg_success')): ?>
		<div class="alert alert-success"><?php echo $this->session->flashdata('msg_success')?></div>
	<?php endif ?>
	<?php if ($this->session->flashdata('msg_error')): ?>
		<div class="alert alert-danger"><?php echo $this->session->flashdata('msg_error')?></div>
	<?php endif ?>
	<div id="wrapper">
		<form class="form-signin" action="<?php echo site_url('user/verify')?>" method="post">
	      <h1 class="h3 mb-3 font-weight-normal">Silahkan Masuk</h1>
	      <label for="inputUsername" class="sr-only">Username</label>
	      <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
	      <label for="inputPassword" class="sr-only">Password</label>
	      <input type="password" name="password" class="form-control" placeholder="Password" required>
	      <button class="btn btn-lg btn-primary btn-block masuk">Masuk</button>
	      <a href="<?php echo site_url('user/add')?>" class="btn btn-lg btn-success btn-block">Daftar</a>
	    </form>
	</div>

	    <!-- Akhir Form Login -->


	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>