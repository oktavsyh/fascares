<?php
	if($_GET['act']=='nama')include 'cari_v.php';else
	if($_GET['act']=='rs_lengkap')include 'rumah_sakit_lengkap_v.php';else
	if($_GET['act']=='faskes')include 'faskes_v.php';else
	if($_GET['act']=='fk_lengkap')include 'faskes_lengkap_v.php';
?>