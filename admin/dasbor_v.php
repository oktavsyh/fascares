    <script type="text/javascript" src="../assets/fc/js/fusioncharts.js">
  </script>
  <script type="text/javascript" src="../assets/fc/js/themes/fusioncharts.theme.fint.js">
  </script>
	<div class="row centers">
		<div class="col-md-5 kotakcenter">
			<div class="row">
				<div class="col-md-12" 
				style="background-color:#2874A6; text-align: center ">
					<h2 style="color:white">Jumlah & Persentase Faskes Di Kota Bogor</h2>
				</div>
			</div>
			<div id="kota" class="kota">
				
			</div>
		</div>
		<div class="col-md-1">
			
		</div>
		<div class="col-md-5 kotakcenter">
			<div class="row">
				<div class="col-md-12" 
				style="background-color:#2874A6; text-align: center ">
					<h2 style="color:white">Jumlah & Persentase Faskes Di Kab Bogor</h2>
				</div>
			</div>
			<div id="kabu" class="kab">
				
			</div>
		</div>
	</div>
  <script type="text/javascript">
      FusionCharts.ready(function(){
          var G1 =new FusionCharts({
              "type":"pie2d",
              "renderAt":"kota",
              "width":"470",
              "height":"470",
              "dataFormat":"jsonurl",
              "dataSource":"kota.php"
          });
          G1.render();

          var G2 =new FusionCharts({
              "type":"pie2d",
              "renderAt":"kabu",
              "width":"470",
              "height":"470",
              "dataFormat":"jsonurl",
              "dataSource":"kab.php"
          });
          G2.render();
      });

  </script>