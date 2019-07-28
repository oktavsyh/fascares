<?php
	include '../db.php';	
		$kelas_tmpt = trim($_POST['kelas_tmpt']);
		$nama_tmpt = trim($_POST['nama_tmpt']);
		$idrs = trim($_POST['idrs']);
		$idtmpt = trim($_POST['idtmpt']);

	if(isset($_POST['update'])){

		if(empty($kelas_tmpt)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql="UPDATE tempat_tidur SET kelas_tmpt='$kelas_tmpt' , nama_tmpt='$nama_tmpt', jam_tutup='$jam_tutup' , id_fk='$idrs'  WHERE id_tmpt='$idtmpt' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah tempat');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah tempat');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		if(empty($idjdwl)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM tempat_tidur WHERE id_tmpt='$idtmpt' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus tempat');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus tempat');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}else{


		if(empty($kelas_tmpt)){
			echo "<script type='text/javascript'>
					alert('Gagal, kelas_tmpt tidak boleh kosong');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
				</script>";
		}else{
			$sql = "INSERT INTO tempat_tidur (kelas_tmpt,nama_tmpt,id_rs) VALUES ('$kelas_tmpt','$nama_tmpt','$idrs')";
			$hsl=mysqli_query($koneksi,$sql);
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah tempat ');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah tempat');
						window.location='index.php?id=".$idrs."&act=rumah_sakit_lengkap';
					</script>";
			}
		}
	}
?>