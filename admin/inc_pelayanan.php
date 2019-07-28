<?php
	include '../db.php';	
		$nama_plyn = trim($_POST['nama_plyn']);
		$idrs = trim($_POST['idrs']);
		$idplyn = trim($_POST['idplyn']);

	if(isset($_POST['update'])){

		if(empty($nama_plyn)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql="UPDATE jenis_pelayanan SET nama_plyn='$nama_plyn',id_rs='$idrs'  WHERE id_plyn='$idplyn' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah pelayanan');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah pelayanan');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		if(empty($idplyn)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM jenis_pelayanan WHERE id_plyn='$idplyn' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus pelayanan');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus pelayanan');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}else{


		if(empty($nama_plyn)){
			echo "<script type='text/javascript'>
					alert('Gagal, nama_plyn tidak boleh kosong');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql = "INSERT INTO jenis_pelayanan (nama_plyn,id_rs) VALUES ('$nama_plyn','$idrs')";
			$hsl=mysqli_query($koneksi,$sql);
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah pelayanan ');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah pelayanan');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}
?>