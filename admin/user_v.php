<div id="usr_dt" class="col-md-8 col-sm-8 col-xs-8">
	<?php
		include 'user_dt_v.php';                  
	?>
</div>

<div id="usr_fm" class="col-md-4 col-sm-4 col-xs-12">
	<?php
		include 'user_fm_v.php';                
	?>               
</div>

<script type="text/javascript">

function load_user(kd,e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false, data: 'id=' + kd,
		url: "user_fm_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#usr_fm').html(msg);
		},
		complete: function() {btn.button('reset')}
	})
}

function load_dtuser(e){
	var btn = $('#'+e);
	$.ajax({
		type: "POST",cache: false,
		url: "user_dt_v.php",
		beforeSend: function() {btn.button('loading')},
		success: function(msg){
			$('#usr_dt').html(msg);
		},
		complete: function() {btn.button('reset')}	
	})
}
</script>