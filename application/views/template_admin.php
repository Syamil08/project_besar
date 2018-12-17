<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	
	<!-- My Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
	<!-- Akhir Fonts -->

	<!-- My icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- My Css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/admin.css"> 
</head>
<body>
	
<!-- Navbar -->
  <nav class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-dark static-top">
    
    <a href="#" class="navbar-brand mr-0 mr-md-2">Admin</a>
    
    
    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <a href="#" class="nav-link p-2"><i class="fa fa-bell"></i></a>
        <li class="nav-item dropdown no-arrow">
          <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-roggle">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a href="#" class="dropdown-item"><?php echo userdata()->username?></a>
            <a href="#" class="dropdown-item"><?php echo userdata()->role?></a>
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
        <a href="<?php echo site_url('admin/add')?>" class="nav-link">
          <i class="fa fa-fw fa-user"></i>
          <span>Tambah Petugas</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo site_url('admin/tampil_petugas')?>" class="nav-link">
          <i class="fa fa-fw fa-table"></i>
          <span>Daftar Petugas</span>
        </a>
      </li>

    </ul>

    <div id="content-wrapper">
      
      <div class="container-fluid">
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
          <li class="breadcrumb-item active">Tables</li>
        </ol>
        
        <?php echo $admin?>

      </div>
      <!-- Akhir /.container-fluid -->
      
    </div>
    <!-- Akhir .content-wrapper -->

  </div>

    <!-- /Akhir #wrapper -->

	<script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>