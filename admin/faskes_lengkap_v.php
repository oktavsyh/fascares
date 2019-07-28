<?php
  include '../db.php';
  $sql=mysqli_query($koneksi,"SELECT * FROM faskes WHERE id_fk=".$_GET['id']." ");
  $hsl=mysqli_fetch_assoc($sql);
  $id_fk=$_GET['id'];
  $nama=$hsl['nama_fk'];
  $kategori=$hsl['kategori_fk'];
  $alamat=$hsl['alamat_fk'];
  $kota=$hsl['kota_fk'];
  $telepon=$hsl['telepon_fk'];
?>
<a href="index.php?act=faskes"><div class="btn btn-primary"><i class='fas fa-backward'></i>&nbsp; Kembali </div></a>
<div class="row"> 


<div class="col-md-8">
	<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i><?php echo $nama?></h2>
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


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                   		<div class="row centered">
                   				<div class="col-md-1">
                   					
                   				</div>
                   				<div class="col-md-2 kotak">
                   					<i class='fas fa-hospital'></i>
                   					<h5><?php echo $kategori; ?> </h5>
                   				</div>
                   				<div class="col-md-2 kotak">
                   					<i class='fas fa-city'></i>
                   					<h5><?php echo $kota; ?> </h5>
                   				</div>
                   				<div class="col-md-3 kotak">
                   					<i class='fas fa-address-card'></i>
                   					<h5><?php echo $alamat; ?> </h5>
                   				</div>
                   				<div class="col-md-2 kotak">
                   					<i class='fas fa-phone'></i>
                   					<h5><?php echo $telepon; ?> </h5>
                   				</div>
                   			
                   		</div>
                    </div>

                  </div>
                </div>


</div>

	<div id="faskes_lengkap_fm" class="col-md-4 col-sm-4 col-xs-12">
		<?php
			include 'faskes_lengkap_fm_v.php';                
		?>               
	</div>
</div>

<div class="row">
		
	<div id="faskes_lengkap_dt" class="col-md-3 col-sm-8 col-xs-8">
		<?php
			include 'faskes_lengkap_dt_v.php';                  
		?>
	</div>

	<div id="faskes_dokter_dt" class="col-md-5 col-sm-8 col-xs-8">
		<?php
			include 'faskes_dokter_dt_v.php';                  
		?>
	</div>

	<div id="faskes_dokter_fm" class="col-md-4 col-sm-8 col-xs-8">
		<?php
			include 'faskes_dokter_fm_v.php';                  
		?>
	</div>

</div>
<div class="row">
	
	<div id="faskes_pegawai_dt" class="col-md-8 col-sm-8 col-xs-8">
		<?php
			include 'faskes_pegawai_dt_v.php';                  
		?>
	</div>

	<div id="faskes_pegawai_fm" class="col-md-4 col-sm-8 col-xs-8">
		<?php
			include 'faskes_pegawai_fm_v.php';                  
		?>
	</div>
</div>

<script type="text/javascript">

function load_faskes(kd,e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false, data: 'id=' + kd,
		url: "faskes_lengkap_fm_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_lengkap_fm').html(msg);
		},
		complete: function() {btn.button('reset')}
	})
}

function load_faskes_dokter(kd,e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false, data: 'id=' + kd,
		url: "faskes_dokter_fm_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_dokter_fm').html(msg);
		},
		complete: function() {btn.button('reset')}
	})
}
function load_pegawai(kd,e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false, data: 'id=' + kd,
		url: "faskes_pegawai_fm_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_pegawai_fm').html(msg);
		},
		complete: function() {btn.button('reset')}
	})
}

function load_dtfaskes(e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false,
		url: "faskes_lengkap_dt_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_lengkap_dt').html(msg);
		},
		complete: function() {btn.button('reset')}	
	})
}


function load_dtfaskes_pegawai(e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false,
		url: "faskes_pegawai_dt_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_pegawai_dt').html(msg);
		},
		complete: function() {btn.button('reset')}	
	})
}


function load_dtfaskes_dokter(e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false,
		url: "faskes_fokter_dt_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_dokter_dt').html(msg);
		},
		complete: function() {btn.button('reset')}	
	})
}
</script>