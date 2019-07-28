<?php
	if($_GET['act']=='rumah_sakit')include 'rumah_sakit_v.php';else
	if($_GET['act']=='faskes')include 'faskes_v.php';else
	if($_GET['act']=='faskes_lengkap')include 'faskes_lengkap_v.php';else
	if($_GET['act']=='rumah_sakit_lengkap')include 'rumah_sakit_lengkap_v.php';else
	if($_GET['act']=='hasil')include 'penghasilan_v.php';else
	if($_GET['act']=='maps')include 'maps_v.php';else
	if($_GET['act']=='user')include 'user_v.php';else
	if($_GET['act']=='dasbor')include 'dasbor_v.php';
?>