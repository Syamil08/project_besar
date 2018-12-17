<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<!-- Akhir Fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/about.css">
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
		      <a class="nav-item nav-link active" href="<?php echo site_url('disaster/index')?>">Home<span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="#">Donasi</a>
		      <a class="nav-item nav-link" href="#">About</a>
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
			<?php endif ?>
		    </div>
		  </div>
		</div>
	</nav>

	<!-- Akhir Navbar -->

	<div id="wrapper">
		<h2 class="section-title h1">OUR TEAM</h1>
		<div class="album py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<p class="paragraph">
								<img class="rounded-circle" src="<?php echo base_url()?>assets/img/syamil.jpg" height="200px" width="200">
							</p>
							<div class="card-body">
								<h5 class="card-text">
									Syamil Bisyir
								</h5>
								<p class="card-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ipsum!
								</p>
								<ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<p class="paragraph">
								<img class="rounded-circle" src="<?php echo base_url()?>assets/img/syamil.jpg" height="200px" width="200">
							</p>
							<div class="card-body">
								<h5 class="card-text">
									Nasution
								</h5>
								<p class="card-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ipsum!
								</p>
								<ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card mb-4 shadow-sm">
							<p class="paragraph">
								<img class="rounded-circle" src="<?php echo base_url()?>assets/img/syamil.jpg" height="200px" width="200">
							</p>
							<div class="card-body">
								<h5 class="card-text">
									Muhammad Alifa Rahmatullah
								</h5>
								<p class="card-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ipsum!
								</p>
								<ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	

	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>