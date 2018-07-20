<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/vertical/images/favicon.ico')?>">
  <title>Assets Management System - PT IPC TPK</title>

  <!-- page css -->
  <link href="<?php echo base_url('assets/vertical/css/pages/login-register-lock.css')?>" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url('assets/vertical/css/style.min.css" rel="stylesheet')?>">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]-->
  <script src="<?php echo site_url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')?>"></script>
  <script src="<?php echo site_url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')?>"></script>
</head>

<body class="horizontal-nav skin-megna card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading...</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(assets/vertical/images/background/bg-ipc.jpg);">
          <div class="login-box card">
              <div class="card-body">
                  <form class="form-horizontal form-material" id="loginform" action="index.html">
                      <div class="form-group">
                          <div class="col-xs-12 text-center">
                              <div class="user-thumb text-center"> <img alt="thumbnail" class="img-circle" width="100" src="<?php echo base_url('assets/vertical/images/users/manager.png')?>">
                                  <h3>Genelia</h3>
                              </div>
                          </div>
                      </div>
                      <div class="form-group ">
                          <div class="col-xs-12">
                              <input class="form-control" type="password" required="" placeholder="password">
                          </div>
                      </div>
                      <div class="form-group text-center">
                          <div class="col-xs-12">
                              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                          </div>
                      </div>
                  </form>
                  <div class="justify-content-md-center"
                    <span><p class="text-muted m-t-30 m-b-30 text-center">2018 © PT IPC Terminal Petikemas.</p>
              </div>
          </div>
      </div>
  </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/vertical/node_modules/jquery/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/vertical/node_modules/popper/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vertical/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>

</body>

</html>
