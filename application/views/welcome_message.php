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
                  <div class="container">
                    <div class="row justify-content-md-center">
                      <div class="col-12 col-md-auto">
                          <img src="<?php echo base_url('assets/vertical/images/logo_ipc.png')?>" class="dark-logo" href="<?php echo base_url('')?>" />
                        </div>
                      </div>
                    </div>
                    <br>
                    <form class="form-horizontal form-material" id="loginform" action="<?php echo base_url('auth/login')?>" method="post">

                        <h3 class="box-title m-b-20">Sign In</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name = "username" required="" placeholder="Username"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name = "password" required="" placeholder="Password"> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit" name="login" value="LOGIN">Log In</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <form class="form-horizontal" id="recoverform" action="<?php echo base_url('')?>">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Please Contact your <span class="text-primary">Administrator!</span> </p>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block waves-effect waves-light">Back</button>
                            </div>
                        </div>
                    </form>
                </div>
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
