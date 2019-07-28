

function uploadimg_afsuc(){
	btn.prop( "disabled", false );
	setTimeout(function(){ progressbox.fadeOut(); }, 3000);
}

function uploadimg_OnProgress(event, position, total, percentComplete){
	progressbar.width(percentComplete + '%');
	statustxt.html('Mengunggah Foto ('+percentComplete + '%)');
}

function uploadimg_befsub(){
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		if($('#comdtmhsfmuploadimg_file').val())
		{
			var fsize = $('#comdtmhsfmuploadimg_file')[0].files[0].size;
			var ftype = $('#comdtmhsfmuploadimg_file')[0].files[0].type;	
			
			switch(ftype)
			{
				case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
					break;
				default:
					showAlert("Format file <b>"+ftype+"</b> tidak didukung! Hanya <b>jpeg</b>/<b>gif</b>/<b>png</b>",'INFO','w','tl');
					return false
			}
			
			if(fsize>1048566) 
			{
				showAlert("Kapasistas gambar <b>"+bytesToSize(fsize) +"</b> terlalu besar! Harus Kurang dari <b>1MB</b>.",'INFO','w','tl');
				return false
			}
		}else {
			showAlert("Silahkan pilih foto terlebih dahulu",'INFO','w','tl');
			return false
		} 
		
		btn.prop( "disabled", true );
		progressbox.fadeIn();
		progressbar.width(completed);
		statustxt.html('Mengunggah Foto ('+completed+'%)');
	}
	else
	{
		showAlert("Maaf tidak dapat merubah gambar, kami mendeteksi browser yang Anda tidak kompatibel dengan 'HTML5 File API'",'INFO','w','tl');
		return false;
	}
}

function upload_imgxxx(){		
	$.ajax({
		beforeSend: function() {$('#xloading').fadeIn();},
		success: function(){
			$('#comdtmhsfmuploadimg').submit();
		},
		complete: function() {$('#xloading').fadeOut();}
	})
}

function load_dtmhsmodal_slcjrs(i){
	var items = [];
	$("#comdtmhsmodal_slcjrs").find('option').remove();
	$.each( data_prodi, function( inst, index ) {
		if(inst==i){
			$.each( index, function( key, val ) {
				items.push( "<option value='" + key + "'>" + val + "</option>" );
			});
		}
	});
	$("#comdtmhsmodal_slcjrs").append(items.join(''));
}

function load_dtcomdtmhs(){
	$.ajax({
		type: "POST",cache: false,
		url: url+con+"combase/load_mhsdt",
		beforeSend: function() {$('#xloading').fadeIn()},
		success: function(msg){
			$('#comdtmhs_dt').html(msg);
		},
		complete: function() {$('#xloading').fadeOut()}	
	})
}



function reload_modalcomdtmhs(id){
	var $modal = $("#commhsdt_modal");
	var data = {
		npm : id			
	};
	$.ajax({
		type: "POST",cache: false, data: data,
		url: url+con+"combase/load_mhsmodal",
		beforeSend: function() {$modal.modal('loading');},
		success: function(msg){
			$('#commhsdt_modalcontent').html(msg);
		},
		complete: function() {$modal.modal('loading');}
	})
}

function commhs_ajaxcrud(fn){
	var $modal = $("#commhsdt_modal");
	var data = $('#comdtmhsmodalfm').serialize();
	$.ajax({
		type: "POST",cache: false, data: data,
		url: url+con+"mhs/"+fn,
		beforeSend: function() {$modal.modal('loading');},
		success: function(msg){
			var buffer = msg.split("|");
			showAlert(buffer[2],buffer[0],buffer[1],'tl',url);
		},
		complete: function() {$modal.modal('loading');}
  	});
}

/* ajax error show respon status
error: function(xhr, status, error) {alert(xhr.responseText)}
*/