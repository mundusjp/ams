<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style> -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<?php
$CI =& get_instance();
$CI->load->helper('url');
?>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/vertical/images/favicon.ico')?>">
<title>Page not Found!</title>

<!-- Custom CSS -->
<link href="<?php echo base_url('assets/vertical/css/style.min.css')?>" rel="stylesheet">
<!-- page css -->
<link href="<?php echo base_url('assets/vertical/css/pages/error-pages.css')?>" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]> -->
<!--<script src="<?php echo site_url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')?>"></script>
<script src="<?php echo site_url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')?>"></script>
-->
</head>

<body class="horizontal-nav skin-megna fixed-layout">
	    <!-- ============================================================== -->
	    <!-- Main wrapper - style you can find in pages.scss -->
	    <!-- ============================================================== -->
	    <section id="wrapper" class="error-page">
	        <div class="error-box">
	            <div class="error-body text-center">
	                <h1>404</h1>
	                <h3 class="text-uppercase">Page Not Found !</h3>
	                <p class="text-muted m-t-30 m-b-30">LET'S GO BACK TO WHERE WE SHOULD BE</p>
	                <a href="<?php echo base_url('')?>" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>

	        </div>
	    </section>
	    <!-- ============================================================== -->
	    <!-- End Wrapper -->
	    <!-- ============================================================== -->
	    <!-- ============================================================== -->
	    <!-- All Jquery -->
	    <!-- ============================================================== -->
			<?php
			$CI =& get_instance();
			$CI->load->helper('url');
			?>
	    <script src="<?php echo base_url('assets/vertical/node_modules/jquery/jquery-3.2.1.min.js')?>"></script>
	    <!-- Bootstrap tether Core JavaScript -->
	    <script src="<?php echo base_url('assets/vertical/node_modules/popper/popper.min.js')?>"></script>
	    <script src="<?php echo base_url('assets/vertical/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
	    <!--Wave Effects -->
	    <script src="<?php echo base_url('assets/vertical/js/waves.js')?>"></script>
</body>
</html>
