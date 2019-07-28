<?php
  if (isset($_POST['submit'])) {
    $kota=$_POST['kota'];
    $kategori=$_POST['kategori'];
  }


  function optionSelect($kategori,$value){
      if ($kategori==$value)
        return "selected";
      else
        return "";
  }
?>

<style type='text/css'>
    #peta {
      margin-top: 10px;
    width: 100%;
    height: 600px;
  } 
</style>

<!--Javascript-->
<script type="text/javascript">
    
  (function() {
  window.onload = function() {
var map;
    var locations = [


   <?php
         //konfgurasi koneksi database 
      if ($kategori=="Rumah Sakit") {
         include "../db.php";
              $sql_lokasi="select id_rs,longitude_rs,latitude_rs
              from rumah_sakit where kota_rs='$kota' ";
              $result=mysqli_query($koneksi,$sql_lokasi);
        // ambil nama,lat dan lon dari table lokasi
              while($data=mysqli_fetch_object($result)){
                 ?>
             ['<?php echo $data->id_rs;?>', <?php echo $data->latitude_rs;?>, <?php echo $data->longitude_rs;?>,"Rumah Sakit"],
             <?php
        }
      }
      else{
         include "../db.php";
              $sql_lokasi="select id_fk,longitude_fk,latitude_fk
              from faskes where kota_fk='$kota' and kategori_fk='$kategori' ";
              $result=mysqli_query($koneksi,$sql_lokasi);
        // ambil nama,lat dan lon dari table lokasi
              while($data=mysqli_fetch_object($result)){
                 ?>
             ['<?php echo $data->id_fk;?>', <?php echo $data->latitude_fk;?>, <?php echo $data->longitude_fk;?>,<?php echo $data->kategori_fk;?>],
             <?php
        }
      }
         
    ?>    
    
    ];

    //Parameter Google maps
    var options = {
      zoom: 11, //level zoom
    //posisi tengah peta
      center: new google.maps.LatLng(-6.597121,106.801623),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
  
   // Buat peta di 
    var map = new google.maps.Map(document.getElementById('peta'), options);
   // Tambahkan Marker 
  
    var infowindow = new google.maps.InfoWindow();

    var iconMarker = 'icon/';

    var uniqueIcons = [
      iconMarker + '1.png',
      iconMarker + '2.png',
      iconMarker + '3.png',
      iconMarker + '4.png',
      iconMarker + '5.png',
      iconMarker + '6.png',
      iconMarker + '7.png',
      iconMarker + '8.png',
      iconMarker + '9.png',
      iconMarker + '10.png',
      iconMarker + '11.png',
      iconMarker + '12.png',
      iconMarker + '13.png',
      iconMarker + '14.png',
      iconMarker + '15.png',
      iconMarker + '16.png',
      iconMarker + '17.png',
      iconMarker + '18.png',
      iconMarker + '19.png',
      iconMarker + '20.png',
      iconMarker + '21.png',
      iconMarker + '22.png',
      iconMarker + '23.png'

    ]
    var iconsLength = uniqueIcons.length;

    var marker, i;

    var iconCounter = 0;
     /* kode untuk menampilkan banyak marker */
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: uniqueIcons[iconCounter]
      });
     /* menambahkan event clik untuk menampikan
       infowindows dengan isi sesuai denga
      marker yang di klik */
      
      if(iconCounter >= iconsLength) {
        iconCounter = 0;
      }
    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() { 
        var id= locations[i][0];
        var kategori = locations[i][3]
  
        $.ajax({
          url : "get_info.php",
          data : {id: id, kategori: kategori} ,
          success : function(data) {
              infowindow.setContent(data);
              infowindow.open(map, marker);
          }
        });   
      }
    })(marker, i));
    }

  };
})();

  </script>

<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> Peta Lokasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs" >
                      <div class="row">
                          <form method="post" action="index.php?act=maps">

                            <div class="col-md-1">
                              
                            </div>
                            <div class="col-md-2">

                              <select class="form-control" name="kota" >
                                <option></option>
                                <option value="Bogor" <?php echo optionSelect($kota,"Bogor"); ?>>Kota Bogor</option>
                                <option value="Kab Bogor" <?php echo optionSelect($kota,"Kab Bogor"); ?>>Kab Bogor</option>
                              </select>
                            </div>
                            <div class="col-md-3">
                              <select class="form-control" name="kategori" >
                                <option></option>
                              <option value="Rumah Sakit" <?php echo optionSelect($kategori,"Rumah Sakit"); ?>>Rumah Sakit</option>
                              <option value="Puskesmas" <?php echo optionSelect($kategori,"Puskesmas"); ?>>Puskesmas</option>
                              <option value="Dokter Praktik Perorangan" <?php echo optionSelect($kategori,"Dokter Praktik Perorangan"); ?>>Dokter Praktik Perorangan</option>
                              <option value="Dokter Gigi" <?php echo optionSelect($kategori,"Dokter Gigi"); ?>>Dokter Gigi</option>
                              <option value="Klinik Utama" <?php echo optionSelect($kategori,"Klinik Utama"); ?>>Klinik Utama</option>
                              <option value="Klinik Pratama" <?php echo optionSelect($kategori,"Klinik Pratama"); ?>>Klinik Pratama</option>
                              <option value="Apotek" <?php echo optionSelect($kategori,"Apotek"); ?>>Apotek</option>
                              </select>
                            </div>

                            <div class="col-md-2">
                              <button name="submit" type="submit" title="Simpan Data" class="btn btn-primary btn-md"><i class="fa fa-search"></i> Cari Faskes</button>
                            </div>
                          </form>
                          </div>
                    </div>

                  </div>
                </div>


<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div id="peta"></div>
</div>
</div>