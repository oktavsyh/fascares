<?php
error_reporting(0);

session_start();
if (!isset($_SESSION['username'])){
  header("location:../login.php");
}

//cek apakah user sudah login

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fascares</title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">

    <link href="../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='../assets/fa/css/all.css'>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <style type="text/css">
      .item{
        color: black;
      }
      .kotak{
          border: 2px solid   #D3D3D3;
          border-radius: 5px;
          margin: 10px;
          padding: 10px;
          height: 100px;
        text-align: center; 
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
      }
      .kotak > i{
        font-size: 24px;
      color: #0053a0;

      }
      .centered{
         margin: auto; max-width: 1000px;
      }
     .dataTables_filter .input-sm{
        width: 110px;
      }
      .jelas{
        margin: 5px;
      }
      .jelas i{
        font-size: 21px;
        margin-right: 5px;
        color:  #B22222;
      }
      .kotakcenter{
        padding: 10px;
        padding-top: 0px;
        display: block;
        margin-top: 20px;
        width: 45%;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      }

      .centers{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 90%;
      }

    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view" style="">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img width="40" height="40" src="../assets/images/hospital.png"></i> <span>Fascares</span></a>
            </div>

            <div class="clearfix"></div>


            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <?php
                include "sidebar.php";
              ?>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <?php
            include "navbar.php";
          ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
              <?php
                include 'page.php';
              ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <?php
            include "footer.php";
          ?>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../assets/vendors/Flot/jquery.flot.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/js/moment/moment.min.js"></script>
    <script src="../assets/js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>

    <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>

    <script src="../assets/vendors/raphael/raphael.min.js"></script>
<script src="../assets/vendors/morris.js/morris.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
        $("#kab").css('cursor', 'pointer');
        $('#kab').dataTable({
            fixedHeader: true
          });
      });


      $(document).ready(function () {
        $("#kabs").css('cursor', 'pointer');
        $('#kabs').dataTable({
            fixedHeader: true
          });
      });
      $(document).ready(function () {
        $("#kabss").css('cursor', 'pointer');
        $('#kabss').dataTable({
            fixedHeader: true
          });
      });

      $(document).ready(function () {
        $("#kasus").css('cursor', 'pointer');
        $('#kasus').dataTable({
            fixedHeader: true
          });
      });

      $(document).ready(function () {
        $("#jenisk").css('cursor', 'pointer');
        $('#jenisk').dataTable({
            fixedHeader: true
          });
      });

      $(document).ready(function () {
        $("#age").css('cursor', 'pointer');
        $('#age').dataTable({
            fixedHeader: true
          });
      });

      $(document).ready(function () {
        $("#usr").css('cursor', 'pointer');
        $('#usr').dataTable({
            fixedHeader: true
          });
      });

      $(document).ready(function() {
        Morris.Bar({
          element: 'graphx',
          data: [
                  {x: '2015 Q1', y: 2, z: 3, a: 4},
                  {x: '2015 Q2', y: 3, z: 5, a: 6},
                  {x: '2015 Q3', y: 4, z: 3, a: 2},
                  {x: '2015 Q4', y: 2, z: 4, a: 5}
                ],
          xkey: 'x',
          ykeys: ['y', 'z', 'a'],
          barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
          hideHover: 'auto',
          labels: ['Y', 'Z', 'A'],
          resize: true
        }).on('click', function (i, row) {
                  console.log(i, row);
        });
      });

    </script>
  </body>
</html>
