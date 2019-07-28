<?php
	include '../db.php';

	if(isset($_POST['update'])){
		$id = trim($_POST['idhasil_txt']);
		$kab = trim($_POST['kab']);
		$thn = trim($_POST['thn_txt']);
		$tbm = trim($_POST['tbm_txt']);
		$tm = trim($_POST['tm_txt']);
		$tr = trim($_POST['tr_txt']);

		$jml = $tbm + $tm + $tr;

		if(empty($id)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=hasil';
				</script>";
		}else{
			$sql = mysql_query("UPDATE tb_penghasilan SET id_kab='$kab', tahun='$thn', tbm='$tbm', tm='$tm', tr='$tr', jumlah='$jml' WHERE id_penghasilan='$id' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah Penghasilan');
						window.location='index.php?act=hasil';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah Penghasilan');
						window.location='index.php?act=hasil';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		$id = trim($_POST['idhasil_txt']);
		if(empty($id)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=hasil';
				</script>";
		}else{
			$sql = mysql_query("DELETE FROM tb_penghasilan WHERE id_penghasilan='$id' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus Penghasilan');
						window.location='index.php?act=hasil';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus Penghasilan');
						window.location='index.php?act=hasil';
					</script>";
			}
		}
	}else{
		$kab = trim($_POST['kab']);
		$thn = trim($_POST['thn_txt']);
		$tbm = trim($_POST['tbm_txt']);
		$tm = trim($_POST['tm_txt']);
		$tr = trim($_POST['tr_txt']);

		$jml = $tbm + $tm + $tr;

		if(empty($kab)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=hasil';
				</script>";
		}else{
			$sql = mysql_query("INSERT INTO tb_penghasilan VALUES(NULL,'$thn','$tbm','$tm','$tr', '$jml', '$kab') ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah Penghasilan');
						window.location='index.php?act=hasil';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah Penghasilan');
						window.location='index.php?act=hasil';
					</script>";
			}
		}
	}

?>