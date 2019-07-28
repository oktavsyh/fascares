<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login | SIG</title>
    <link rel="shortcut icon" href="asset/dist/img/lg.png">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="assets/dist/css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="assets/dist/css/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    
    <!-- jQuery-->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="assets/plugins/jQuery/jquery.form.min.js"></script>
	<script src="assets/plugins/jQuery/jquery.preload.min.js"></script>
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/app.min.js" type="text/javascript"></script>
  </head>
  
  <body class='skin-green sidebar-collapse '>
    <div class="wrapper">
      <div class="content-wrapper">
        <section class="content">
        	<?php 
                include 'login_v.php';
            ?>
        </section>
      </div>
      <?php //$this->load->view($def_con.'footer_v');?>
    </div>
    
  </body>
</html>