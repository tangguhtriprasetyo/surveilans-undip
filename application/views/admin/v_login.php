<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin D-Dart | Surveilans</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/adminlte.min.css') ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
</head>
<body class="hold-transition login-page" style="background-image: url('<?= base_url('assets'); ?>/img/dokter.png'); background-position: left;
    background-repeat: 2;">
<div class="login-box">
  <div class="login-logo">
    <div class="site-heading text-center">
        <img class="mb-2" src="<?php echo base_url('assets/img/ddart.png') ?>" height="25%" width="25%">
        <h1 style="font-size: 25px; ">Admin Surveilens D-Dart</h1></div>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        <div class="site-heading text-center" style="margin-bottom: 24px;">
            <h1 style="font-size: 25px;">Silahkan Login</h1></div>
      <form method="POST" action="<?php echo base_url('admin/login/post_login') ?>">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
      <div class="text-center mb-3" style="margin-top: 32px;">
        <strong>Copyright &copy; 2020 <a href="#">D-DART</a>.</strong>
            All rights reserved.
      </div>
  </div>
</div>
<!-- /.login-box -->
<script src="<?= base_url('assets'); ?>/admin/js/adminlte.min.js"></script>

</body>
</html>
