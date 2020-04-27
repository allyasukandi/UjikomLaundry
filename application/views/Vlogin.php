<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatable/datatablecss.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatable/datatablecss.min.css') ?>">
  <style type="text/css">
  *{
  font-family: verdana;
}
body{
  background-image: url("<?= base_url('assets/image/1.jpg');?>");
  background-size: 100%;
}
.container{
  margin-top: 150px;
  border-radius: 5px;
  background-color: gray;
}
form{
  padding: 5px;
}
</style>

</head>
<body>
<div class="row ">
     <div class="col-lg-4 mx-auto">
       <br><br><br>
       <br>
       <br>
       <div class="card bg-light">
         <div class="card-body">
           <div class="tittle">
             <h3 class="text-center">Silahkan Login Terlebih Dahulu</h3><br>
           </div>
<?php if (!empty($this->session->flashdata('error_login'))) :?>
    <div class="alert alert-warning">
        <p> Mohon maaf password atau username salah </p>
    </div>
<?php endif ?>


    <?= form_open('App_controler/CProsesLogin', ['method' => 'POST']) ?>
            <div class="form-group">
                <label>Nama Pengguna</label>
                <input type="text" class="form-control" name="nm_pengguna" placeholder="Nama Pelanggan">
            </div>
            <div class="form-group">
                <label>Password</labl>
                <input type="password" class="form-control" name="pass" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-primary" value="Login">
    <?= form_close()?>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>