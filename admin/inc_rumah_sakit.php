<?php
	include '../db.php';	

		$alamat = trim($_POST['alamat_rs']);
		$idrs = trim($_POST['id_rs']);
		$nama = trim($_POST['nama_rs']);
		$long = trim($_POST['longitude_txt']);
		$lat = trim($_POST['latitude_txt']);
		$notelp = trim($_POST['notelp_rs']);
		$kota=trim($_POST['kota_rs']);

	if(isset($_POST['update'])){
		if(empty($idrs)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=rumah_sakit';
				</script>";
		}else{
			$sql="UPDATE rumah_sakit SET alamat_rs='$alamat', telepon_rs='$notelp', kota_rs='$kota', nama_rs='$nama', longitude_rs='$long', latitude_rs='$lat' WHERE id_rs='$idrs' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah rumah_sakit');
						window.location='index.php?act=rumah_sakit';
					</script>";
			}else{
				
			}
		}
	}elseif(isset($_POST['delete'])){
		$idrs = trim($_POST['id_rs']);
		if(empty($idrs)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=rumah_sakit';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM rumah_sakit WHERE id_rs='$idrs' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus rumah_sakit');
						window.location='index.php?act=rumah_sakit';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus rumah_sakit');
						window.location='index.php?act=rumah_sakit';
					</script>";
			}
		}
	}else{
		if(empty($nama)){
			echo "<script type='text/javascript'>
					alert('Gagal, rumah sakit tidak boleh kosong');
					window.location='index.php?act=rumah_sakit';
				</script>";
		}else{
			$sql = "INSERT INTO rumah_sakit (nama_rs,kota_rs,alamat_rs,telepon_rs,longitude_rs,latitude_rs) VALUES ('$nama','$kota','$alamat','$notelp','$long','$lat')";
			$hsl=mysqli_query($koneksi,$sql);
			 // Simpan di Folder Gambar
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah rumah_sakit');
						window.location='index.php?act=rumah_sakit';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah rumah_sakit');
						window.location='index.php?act=rumah_sakit';
					</script>";
			}
		}
	}
?>