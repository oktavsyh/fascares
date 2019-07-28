<?php
	include '../db.php';	
	if(isset($_POST['update'])){
		$idkab = trim($_POST['id_kab_txt']);
		$kab = trim($_POST['kabupaten_txt']);
		$long = trim($_POST['longitude_txt']);
		$lat = trim($_POST['latitude_txt']);
		if(empty($idkab)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=kabupaten';
				</script>";
		}else{
			$sql = mysql_query("UPDATE tb_kabupaten SET kabupaten='$kab', longitude='$long', latitude='$lat' WHERE id_kab='$idkab' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah Kabupaten');
						window.location='index.php?act=kabupaten';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah Kabupaten');
						window.location='index.php?act=kabupaten';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		$idkab = trim($_POST['id_kab_txt']);
		if(empty($idkab)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=kabupaten';
				</script>";
		}else{
			$sql = mysql_query("DELETE FROM tb_kabupaten WHERE id_kab='$idkab' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus Kabupaten');
						window.location='index.php?act=kabupaten';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus Kabupaten');
						window.location='index.php?act=kabupaten';
					</script>";
			}
		}
	}else{
		$kab = trim($_POST['kabupaten_txt']);
		$long = trim($_POST['longitude_txt']);
		$lat = trim($_POST['latitude_txt']);
		if(empty($kab)){
			echo "<script type='text/javascript'>
					alert('Gagal, Kabupaten tidak boleh kosong');
					window.location='index.php?act=kabupaten';
				</script>";
		}else{
			$sql = "INSERT INTO tb_kabupaten (kabupaten,longitude,latitude) VALUES ('$kab','$long','$lat')";
			mysql_query($sql);
			 // Simpan di Folder Gambar
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah Kabupaten');
						window.location='index.php?act=kabupaten';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah Kabupaten');
						window.location='index.php?act=kabupaten';
					</script>";
			}
		}
	}
?>