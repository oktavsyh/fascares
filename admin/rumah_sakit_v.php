<div class="row">
	
<div id="rumah_sakit_dt" class="col-md-8 col-sm-8 col-xs-8">
	<?php
		include 'rumah_sakit_dt_v.php';                  
	?>
</div>

<div id="rumah_sakit_fm" class="col-md-4 col-sm-4 col-xs-12">
	<?php
		include 'rumah_sakit_fm_v.php';                
	?>               
</div>

</div>
<script type="text/javascript">

function load_rumah_sakit(kd,e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false, data: 'id=' + kd,
		url: "rumah_sakit_fm_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#rumah_sakit_fm').html(msg);
		},
		complete: function() {btn.button('reset')}
	})
}

function load_dtrumah_sakit(e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false,
		url: "rumah_sakit_dt_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#rumah_sakit_dt').html(msg);
		},
		complete: function() {btn.button('reset')}	
	})
}
</script>