<div class="row"> 

<div id="faskes_dt" class="col-md-8 col-sm-8 col-xs-8">
	<?php
		include 'faskes_dt_v.php';                  
	?>
</div>

<div id="faskes_fm" class="col-md-4 col-sm-4 col-xs-12">
	<?php
		include 'faskes_fm_v.php';                
	?>               
</div>
</div>


<script type="text/javascript">

function load_faskes(kd,e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false, data: 'id=' + kd,
		url: "faskes_fm_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_fm').html(msg);
		},
		complete: function() {btn.button('reset')}
	})
}

function load_dtfaskes(e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false,
		url: "faskes_dt_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#faskes_dt').html(msg);
		},
		complete: function() {btn.button('reset')}	
	})
}
</script>