<?php
	include '../db.php';	
	if(isset($_POST['update'])){

		$nama = trim($_POST['nama_fk']);
		$kategori = trim($_POST['kategori_fk']);
		$alamat = trim($_POST['alamat_fk']);
		$notelp = trim($_POST['notelp_fk']);
		$kota=trim($_POST['kota_fk']);
		$long = trim($_POST['longitude_txt']);
		$lat = trim($_POST['latitude_txt']);
		$idfk = trim($_POST['id_fk']);
		if(empty($idfk)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=faskes';
				</script>";
		}else{
			$sql="UPDATE faskes SET kategori_fk='$kategori' , telepon_fk='$notelp', kota_fk='$kota' , alamat_fk='$alamat' , nama_fk='$nama', longitude_fk='$long' , latitude_fk='$lat' WHERE id_fk='$idfk' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah faskes');
						window.location='index.php?act=faskes';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah faskes');
						window.location='index.php?act=faskes';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		$idfk = trim($_POST['id_fk']);
		if(empty($idfk)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=faskes';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM faskes WHERE id_fk='$idfk' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus faskes');
						window.location='index.php?act=faskes';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus faskes');
						window.location='index.php?act=faskes';
					</script>";
			}
		}
	}else{

		$nama = trim($_POST['nama_fk']);
		$kategori = trim($_POST['kategori_fk']);
		$alamat = trim($_POST['alamat_fk']);
		$notelp = trim($_POST['notelp_fk']);
		$kota=trim($_POST['kota_fk']);
		$long = trim($_POST['longitude_txt']);
		$lat = trim($_POST['latitude_txt']);

		if(empty($nama)){
			echo "<script type='text/javascript'>
					alert('Gagal, rumah sakit tidak boleh kosong');
					window.location='index.php?act=faskes';
				</script>";
		}else{
			$sql = "INSERT INTO faskes (nama_fk,kategori_fk,telepon_fk,alamat_fk,kota_fk,longitude_fk,latitude_fk) VALUES ('$nama','$kategori','$notelp','$alamat','$kota','$long','$lat')";
			mysqli_query($koneksi,$sql);
			 // Simpan di Folder Gambar
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah faskes');
						window.location='index.php?act=faskes';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah faskes');
						window.location='index.php?act=faskes';
					</script>";
			}
		}
	}
?>