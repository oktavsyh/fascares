<?php
	include '../db.php';	

		$profesi = trim($_POST['profesi']);
		$jumlah = trim($_POST['jumlah']);
		$idfk = trim($_POST['idfk']);
		$idjml = trim($_POST['idjml']);

	if(isset($_POST['update'])){

		if(empty($idjml)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
				</script>";
		}else{
			$sql="UPDATE jumlah_pegawai SET profesi_pgw='$profesi' , jumlah_pgw='$jumlah' WHERE id_jml='$idjml' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah pegawai');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah pegawai');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		if(empty($idjml)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM jumlah_pegawai WHERE id_jml='$idjml' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus pegawai');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus pegawai');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}else{

		if(empty($profesi)){
			echo "<script type='text/javascript'>
					alert('Gagal, nama tidak boleh kosong');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';				</script>";
		}else{
			$sql = "INSERT INTO jumlah_pegawai (profesi_pgw,jumlah_pgw,id_fk) VALUES ('$profesi','$jumlah',$idfk)";
			mysqli_query($koneksi,$sql);
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah pegawai ');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah pegawai');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}
?>