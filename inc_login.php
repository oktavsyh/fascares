<?php
session_start();
include ('db.php');
					
$username	= $_POST['txt_username'];
$password	= $_POST['txt_password'];
//$username = $_POST['txt_username'];	
//$password = md5($_POST['txt_password']);	

$sql =" SELECT * FROM tb_user WHERE username='$username' AND password='$password' ";

$cek = mysqli_query($koneksi,$sql);

	if($hsl = mysqli_fetch_assoc($cek)){//jika berhasil akan bernilai 1
		
		$_SESSION['username'] = $hsl['username'];
		$_SESSION['nama'] = $hsl['nama'];
		$_SESSION['level'] = $hsl['level'];
	
		echo $_SESSION['username'];

		if($hsl['level']=='administrator'){
			?>	<script type="text/javascript">
				window.location="admin/index.php?act=dasbor";
			</script> <?php
		}
	}else{
			?>	<script type="text/javascript">
				alert('Gagal Login');
				window.location="index.php";
			</script> <?php
	}
?>