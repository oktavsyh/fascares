<?php
	include '../db.php';	
		$nama_srn = trim($_POST['nama_srn']);
		$idrs = trim($_POST['idrs']);
		$idsrn = trim($_POST['idsrn']);

	if(isset($_POST['update'])){

		if(empty($nama_srn)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql="UPDATE sarana_faskes SET nama_srn='$nama_srn', jam_tutup='$jam_tutup' , id_fk='$idrs'  WHERE id_srn='$idsrn' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah sarana');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah sarana');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		if(empty($idsrn)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM sarana_faskes WHERE id_srn='$idsrn' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus sarana');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus sarana');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}else{


		if(empty($nama_srn)){
			echo "<script type='text/javascript'>
					alert('Gagal, nama_srn tidak boleh kosong');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql = "INSERT INTO sarana_faskes (nama_srn,id_rs) VALUES ('$nama_srn','$idrs')";
			$hsl=mysqli_query($koneksi,$sql);
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah sarana ');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah sarana');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}
?>