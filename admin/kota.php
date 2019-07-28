<?php
	include '../db.php';

	$rsq="SELECT COUNT(id_rs) as jml_rs
	 FROM rumah_sakit WHERE kota_rs='Bogor'";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_rs=$hsl['jml_rs'];
	}


	$rsq="SELECT COUNT(id_fk) as jml_fk
	 FROM faskes WHERE kota_fk='Bogor' AND
	  kategori_fk='Puskesmas' ";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_pk=$hsl['jml_fk'];
	}


	$rsq="SELECT COUNT(id_fk) as jml_fk
	 FROM faskes WHERE kota_fk='Bogor' AND
	  kategori_fk='Dokter Praktik Perorangan' ";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_dpp=$hsl['jml_fk'];
	}


	$rsq="SELECT COUNT(id_fk) as jml_fk
	 FROM faskes WHERE kota_fk='Bogor' AND
	  kategori_fk='Dokter Gigi' ";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_dg=$hsl['jml_fk'];
	}


	$rsq="SELECT COUNT(id_fk) as jml_fk
	 FROM faskes WHERE kota_fk='Bogor' AND
	  kategori_fk='Klinik Utama' ";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_ku=$hsl['jml_fk'];
	}

	$rsq="SELECT COUNT(id_fk) as jml_fk
	 FROM faskes WHERE kota_fk='Bogor' AND
	  kategori_fk='Klinik Pratama' ";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_kp=$hsl['jml_fk'];
	}

	$rsq="SELECT COUNT(id_fk) as jml_fk
	 FROM faskes WHERE kota_fk='Bogor' AND
	  kategori_fk='Apotek' ";
	$rslt=mysqli_query($koneksi,$rsq);
	while ($hsl=mysqli_fetch_assoc($rslt)) {
		$jml_ap=$hsl['jml_fk'];
	}

	$d=array();
	$kategori=array("Rumah Sakit","Puskesmas",
		"Dokter Praktik Perorangan","Dokter Gigi",
		"Klinik Utama","Klinik Pratama","Apotek");
	$jml=array($jml_rs,$jml_pk,$jml_dpp,$jml_dg,
		$jml_ku,$jml_kp,$jml_ap);

	for ($i=0;$i<7;$i++){
		array_push($d,array("label"=>$kategori[$i],
			"value"=>$jml[$i]));
	}

	$c =array(
			"theme"=>"fint"
		);

	$gab=array("chart"=>$c, "data"=>$d);
	$j=json_encode($gab);
	echo $j;
?>