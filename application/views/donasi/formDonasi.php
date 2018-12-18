<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  
  <!-- My Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <!-- Akhir Fonts -->
  
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>application/views/disaster/style.css">


  <style>
    body {
      background-color: #F2F3F4;
    }
  </style>
</head>
<body>
  <br>
  <div class="container">
    <h4 style="text-align: center">Anda Akan Berdonasi Untuk : <?php echo $detail->title?></h4>

    <div class="card shadow p-3 mb-5 bg-white rounded" style="width:50%; margin: 0 auto" ng-app="">
        <div class="card-body">            
            <form action="<?php echo site_url('donasi/save')?>" method="post">
                  <input type="hidden" name="id_disaster" value="<?php echo $detail->id?>">
                  <div class="form-group">
                      <label for="varchar">Nama Barang<?php echo form_error('name') ?></label>
                      <input type="text" class="form-control" name="name" id="name" placeholder="Nama Barang" required/>
                  </div>
                  <div class="form-group">
                      <label for="int">Jumlah Barang<?php echo form_error('qty') ?></label>
                      <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required ng-model="qty"/>
                  </div>
                  <div class="form-group">
                      <label for="int">Tanggal Pengambilan<?php echo form_error('Tanggal Pengambilan') ?></label>
                      <input type="date" class="form-control" name="date" id="address" required />
                  </div>
                  <div class="form-group">
                      <label for="int">Lokasi Pengambilan<?php echo form_error('address') ?></label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Alamat Lengkap" required/>
                  </div>
                      <p class="text-center">Anda Akan Mendonasikan <span class="btn btn-warning"><b>{{qty}}</b></span> Barang</p> 
                <button class="btn btn-primary btn-block">Kirim Donasi</button> 
          </form>
      </div>
    </div>
  </div> 

    <script src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/angular/angular.min.js"></script>


</body>
</html>