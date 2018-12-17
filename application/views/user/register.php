<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<!-- Akhir Fonts -->
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/register.css">
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
		      <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#">Donasi</a>
		      <a class="nav-item nav-link" href="#">About</a>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->

	<!-- Awal Form Login -->

	<div id="wrapper">
		<h1 class="h3 mb-3 font-weight-normal">Register</h1>
		<form action="<?php echo site_url('user/save')?>" method="post" class="form-signin">
			<div class="row">
				<div class="col-md-6 mb-3 form-group">
					<label for="Username" class="sr-only">Firstname</label>
					<input type="text" name="firstname" class="form-control" placeholder="Firstname" required autofocus>
				</div>
				<div class="col-md-6 mb-3 form-group">
					<label for="Username" class="sr-only">Lastname</label>
					<input type="text" name="lastname" class="form-control" placeholder="Lastname" required autofocus>
				</div>
				<div class="col-md-6 mb-3 form-group">
					<label for="Username" class="sr-only">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
				</div>
				<div class="col-md-6 mb-3 form-group">
					<label for="password" class="sr-only">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
				</div>
			</div>
			<div class="mb-3 form-group">
				<label for="phone" class="sr-only">Nomor Hp</label>
				<input type="number" name="phone" class="form-control" placeholder="Masukkan Nomor Hp Anda" required autofocus>
			</div>
			<div class="mb-3 form-group">
				<label for="addres" class="sr-only">Alamat</label>
				<textarea name="addres" class="form-control" rows="3" placeholder="Masukkan Alamat Anda"></textarea>
			</div>
			<hr class="mt-4 mb-4">
			<button class="btn btn-lg btn-primary btn-block masuk">Submit</button>
		</form>
	</div>

	    <!-- Akhir Form Login -->

	
	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>