<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	
  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <!-- Akhir Fonts -->

  <!-- My icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dashboard.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Donatur - MyProfile</title>

</head>
<body>
	<!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-dark static-top">
    
    <a href="#" class="navbar-brand mr-0 mr-md-2">Donatur</a>
    
    
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <a href="#" class="nav-link p-2"><i class="fa fa-bell-o"></i></a>
        <li class="nav-item dropdown no-arrow">
          <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a href="#" class="dropdown-item">Settings</a>
            <a href="#" class="dropdown-item">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a href="<?php echo site_url('user/logout')?>" class="dropdown-item" >Logout</a>
          </div>
        </li>
    </ul>
  </nav>
  <!-- Akhr Navbar -->

  
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      
      <div class="logo">
          <h2>Donate</h2>
      </div> 

      <li class="nav-item">
        <a href="<?php echo site_url('donatur/index')?>" class="nav-link">
          <i class="fa fa-fw fa-user"></i>
          <span>My Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo site_url('donatur/riwayat')?>" class="nav-link">
          <i class="fa fa-fw fa-table"></i>
          <span>Riwayat Donasi</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo site_url('disaster/index')?>" class="nav-link">
          <i class="fa fa-undo"></i>
          <span>Kembali Ke beranda</span>
        </a>
      </li>

    </ul>
    <!--Akhir Sidebar-->

    <!--Isi Konten-->
    <div class="container">
    	<div id="content-wrapper">
        <?php if ($this->session->flashdata('msg_success')): ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('msg_success')?></div>
      <?php endif ?>
      <?php if ($this->session->flashdata('msg_error')): ?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('msg_error')?></div>
      <?php endif ?>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
              Dashboard
          </li>
          <li class="breadcrumb-item active">Donatur</li>
        </ol>
    		<!-- isi konten tengah -->
        
        <?php echo $donatur?>

    	</div>
    </div>

    <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>