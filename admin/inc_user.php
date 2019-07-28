<?php
	include '../db.php';	
	if(isset($_POST['update'])){
		$usr = trim($_POST['usr_txt']);
		$nm = trim($_POST['nm_txt']);
		$pw = trim(md5($_POST['pw_txt']));
		if(empty($usr)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=usr';
				</script>";
		}else{
			$sql = mysql_query("UPDATE tb_user SET nama='$nm', password='$pw' WHERE username='$usr' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Merubah User');
						window.location='index.php?act=usr';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Merubah User');
						window.location='index.php?act=usr';
					</script>";
			}
		}
	}elseif(isset($_POST['delete'])){
		$usr = trim($_POST['usr_txt']);
		if(empty($usr)){
			echo "<script type='text/javascript'>
					alert('Gagal, Lengkapi Data');
					window.location='index.php?act=usr';
				</script>";
		}else{
			$sql = mysql_query("DELETE FROM tb_user WHERE username='$usr' ");
			if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menghapus User');
						window.location='index.php?act=usr';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menghapus User');
						window.location='index.php?act=usr';
					</script>";
			}
		}
	}else{
		$usr = trim($_POST['usr_txt']);
		$nm = trim($_POST['nm_txt']);
		$pw = trim(md5($_POST['pw_txt']));
		$lev = 'administrator';
		$sql = mysql_query("INSERT INTO tb_user VALUES ('$nm','$usr','$pw','$lev')");
		if($sql){
				echo "<script type='text/javascript'>
						alert('Berhasil Menambah User');
						window.location='index.php?act=usr';
					</script>";
			}else{
				echo "<script type='text/javascript'>
						alert('Gagal Menambah User');
						window.location='index.php?act=usr';
					</script>";
			}
	}
?>