<?php
	include '../db.php';	

		$nama = trim($_POST['nama_dktr']);
		$jk = trim($_POST['jk_dktr']);
		$idfk = trim($_POST['idfk']);
		$iddktr = trim($_POST['iddktr']);

	if(isset($_POST['update'])){

		if(empty($idfk)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=faskes';
				</script>";
		}else{
			$sql="UPDATE dokter SET nama_dktr='$nama' , jk_dktr='$jk' WHERE id_dktr='$iddktr' ";
				 $hsl=mysqli_query($koneksi,$sql);
			if($hsl){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah dokter');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah dokter');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		if(empty($iddktr)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=faskes';
				</script>";
		}else{
			$sql = mysqli_query($koneksi,"DELETE FROM dokter WHERE id_dktr='$iddktr' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus dokter');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus dokter');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}else{

		if(empty($nama)){
			echo "<script type='text/javascript'>
					alert('Gagal, nama tidak boleh kosong');
					window.location='index.php?act=faskes';
				</script>";
		}else{
			$sql = "INSERT INTO dokter (nama_dktr,jk_dktr,id_fk) VALUES ('$nama','$jk',$idfk)";
			mysqli_query($koneksi,$sql);
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah Dokter ');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah Dokter');
						window.location='index.php?id=".$idfk."&act=faskes_lengkap';
					</script>";
			}
		}
	}
?>