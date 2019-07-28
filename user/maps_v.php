

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
    var locations = [<?php
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
  
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div id="peta"></div>
</div>
</div>