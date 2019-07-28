
<script type="text/javascript">
    
  (function() {
  window.onload = function() {
var map;
    var locations = [


   <?php
      if ($kategori=="Rumah Sakit") {
         include "../db.php";
              $sql_lokasi="select id_fk,longitude_fk,latitude_fk
              from faskes where kota_fk='$kota' and kategori_fk='$kategori' ";
              $result=mysqli_query($koneksi,$sql_lokasi);
        // ambil nama,lat dan lon dari table lokasi
              while($data=mysqli_fetch_object($result)){
                 ?>
             ['<?php echo $data->id_fk;?>', <?php echo $data->latitude_fk;?>, <?php echo $data->longitude_fk;?>,"Rumah Sakit"],
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

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

    
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
