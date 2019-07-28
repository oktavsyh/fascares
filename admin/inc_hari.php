<?php
	include '../db.php';	
		$hari = trim($_POST['hari']);
		$jam_buka = trim($_POST['jam_buka']);
		$jam_tutup = trim($_POST['jam_tutup']);
		$idfk = trim($_POST['idfk']);
		$idjdwl = trim($_POST['idjdwl']);

	if(isset($_POST['update'])){

		if(empty($hari)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
				</script>";
		}else{
			$sql="UPDATE jadwal_praktek SET hari='$hari' , jam_buka='$jam_buka', jam_tutup='$jam_tutup' , id_fk='$idfk'  WHERE id_jdwl='$idjdwl' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah jadwal');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah jadwal');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		if(empty($idjdwl)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM jadwal_praktek WHERE id_jdwl='$idjdwl' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus jadwal');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus jadwal');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}else{


		if(empty($hari)){
			echo "<script type='text/javascript'>
					alert('Gagal, hari tidak boleh kosong');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
				</script>";
		}else{
			$sql = "INSERT INTO jadwal_praktek (hari,jam_buka,jam_tutup,id_fk) VALUES ('$hari','$jam_buka','$jam_tutup','$idfk')";
			mysqli_query($koneksi,$sql);
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah faskes ');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah faskes');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}
?>