
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIG BPJS</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel='stylesheet' href='../assets/fa/css/all.css'>

    <!-- My Styles -->
    <link rel="stylesheet" href="styles/styles.css">

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0 warna" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-center mr-1" style="max-width: 200px;" src="images/fascares.png" alt="Shards Dashboard">
                </div>
              </a>
            </nav>
          </div>
          
          <div class="nav-wrapper">
            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link " href="index.php">
                  <i class="material-icons">place</i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">search</i>
                  <span>Pencarian</span>
                </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="cari-nama.php?act=nama">Nama</a>
                    <a class="dropdown-item" href="cari-wilayah.php?act=wilayah">Wilayah</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " href="rekap-faskes.php">
                  <i class="fa fa-medkit"></i>
                  <span>Rekapitulasi Faskes</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">

          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar navbar-light">
              <a href=""><i class="fa fa-outdent"></i></a>
              <img style="max-width: 200px;" src="images/logo-bpjs.png">
              <div class="content-geser"></div>
            </nav>
          </div>
          
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4"> 
            <div class="content"></div>
            <div class="container p-1 running-text">
               <marquee behavior="scroll" direction="left">Badan Penyelenggara Jaminan Sosial </marquee>
            </div>
            <div class="content con1"></div>
            <div class="container header-peta-lokasi">Pencarian Data Faskes</div>
            <div class="container selectbox-peta-faskes">

            <?php
              $kategori=false;

              function optionSelect($kategori,$value){
                  if ($kategori==$value)
                    return "selected";
                  else
                    return "";
              }
            ?>
              <form action="cari-nama.php?act=nama" method="post">
                <input type="text" name="cari"></input>
                
                &nbsp;&nbsp;&nbsp;&nbsp;
                
                <select name="kategori">
                              <option></option>
                             <option value="Rumah Sakit" <?php echo optionSelect($kategori,"Rumah Sakit"); ?>>Rumah Sakit</option>
                              <option value="Puskesmas" <?php echo optionSelect($kategori,"Puskesmas"); ?>>Puskesmas</option>
                              <option value="Dokter Praktik Perorangan" <?php echo optionSelect($kategori,"Dokter Praktik Perorangan"); ?>>Dokter Praktik Perorangan</option>
                              <option value="Dokter Gigi" <?php echo optionSelect($kategori,"Dokter Gigi"); ?>>Dokter Gigi</option>
                              <option value="Klinik Utama" <?php echo optionSelect($kategori,"Klinik Utama"); ?>>Klinik Utama</option>
                              <option value="Klinik Pratama" <?php echo optionSelect($kategori,"Klinik Pratama"); ?>>Klinik Pratama</option>
                              <option value="Apotek" <?php echo optionSelect($kategori,"Apotek"); ?>>Apotek</option>
                                         
                </select>

                &nbsp;&nbsp;&nbsp;&nbsp;

                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" name="submit" class="btn btn-success-mod1"><i class="fa fa-search"></i></button>
                  <button type="submit" name="submit" class="btn btn-success-mod2"><strong>Cari Faskes</strong></button>
                </div>

              </form>
            </div>
            
            <div class="content"></div>
            <div class="container box-peta-lokasi">
              <div class="container line-peta-lokasi">
                <div class="content"></div>
                  <?php
                      include 'page.php';
                  ?>
              </div>

              <div class="content"></div>

              <div class="container line-info-lokasi">
                <span class="deco-info">* Informasi :</span><br>
                <i class="fa fa-hand-point-right"></i>&nbsp;&nbsp;Fascares menampilkan data profil fasilitas kesehatan yang bekerja sama dengan BPJS Kesehatan.<br>
                <i class="fa fa-hand-point-right"></i>&nbsp;&nbsp;Gunakan tools pencarian di atas untuk menemukan data fasilitas kesehatan yang Anda cari.
              </div>
            </div>
              
      
          </div>

          <div class="content"></div>

          <footer class="main-footer d-flex p-3 px-3 bg-white border-top" >
            <div class="container">Fascares 2018</div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container"></div>
            <div class="container">
              &copy; BPJS Kesehatan 2018&nbsp;
              <i class="fa fa-arrow-up"></i>
            </div>
          </footer>
        </main>
      </div>
    </div>
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
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

    <script src="../assets/vendors/Flot/jquery.flot.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/raphael/raphael.min.js"></script>
<script src="../assets/vendors/morris.js/morris.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
        $("#kabs").css('cursor', 'pointer');
        $('#kabs').dataTable({
            fixedHeader: true
          });
      });</script>
  </body>
</html>