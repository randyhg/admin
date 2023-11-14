
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../adminlte/dist/css/adminlte.css">
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('/login') ?>" class="h1"><b>Vendor</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?= base_url('/signin')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
          <!-- /.col -->
          <div class="col-4">
            <a href="" name="signIn" class="btn btn-primary btn-block">
                Sign in
            </a>
          </div>
        </div>
      </form>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('public/adminlte/plugins/jquery/jquery.min.');?>js"></script>
<script src="<?= base_url('public/adminlte/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url('public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/chart.js/Chart.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/sparklines/sparkline.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/jqvmap/jquery.vmap.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/jquery-knob/jquery.knob.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/moment/moment.min.js');?>"></script>
<!-- <script src="<?= base_url('public/adminlte/plugins/daterangepicker/daterangepicker.js');?>"></script> -->
<script src="<?= base_url('public/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/summernote/summernote-bs4.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js');?>"></script>
<script src="<?= base_url('public/adminlte/dist/js/adminlte.js');?>"></script>
<!-- <script src="<?= base_url('public/adminlte/dist/js/demo.js');?>"></script> -->
<script src="<?= base_url('public/adminlte/dist/js/pages/dashboard.js');?>"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</body>
</html>
