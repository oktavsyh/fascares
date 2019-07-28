<?php
  include '../db.php';

$id=$_GET['id'];
   
?>
    <div id="content" >
    <div id="siteNotice">
    </div>
    <h4 id="firstHeading" class="firstHeading">Data Faskes</h4>
    <div id="bodyContent">
    <?php 

    if ($_GET['kategori']=="Rumah Sakit") {
        
        $sql_lokasi="select * 
                from rumah_sakit where id_rs='$id' ";
                $result=mysqli_query($koneksi,$sql_lokasi);  
        while($data=mysqli_fetch_object($result)){
            $kab = $data->nama_rs;
    ?> 
            <div class="jelas">
                <span><i class='fas fa-hospital-alt'></i></span><span><?php echo $kab ?></span>
            </div>
            <div class="jelas">
                <span><i class='fas fa-hospital'></i></span><span><?php echo $data->alamat_rs ?></span>
            </div>
            <div class="jelas">
                <span><i class='fas fa-phone'></i></span><span><?php echo $data->telepon_rs ?></span>
            </div>
            <center><a href="cari-nama.php?id=<?= $id ?>&act=rs_lengkap">
                <button class="btn btn-danger">Lihat Lengkap</button>
            </a></center>
    <?php
        }
    }else{
        $sql_lokasi="select * 
                from faskes where id_fk='$id' ";
                $result=mysqli_query($koneksi,$sql_lokasi);  
        while($data=mysqli_fetch_object($result)){
            $kab = $data->nama_fk;
    ?> 

            <div class="jelas">
                <span><i class='fas fa-hospital'></i></span><span><?php echo $kab ?></span>
            </div>
            <div class="jelas">
                <span><i class='fas fa-map-marker-alt'></i></span><span><?php echo $data->alamat_fk ?></span>
            </div>
            <div class="jelas">
                <span><i class='fas fa-phone'></i></span><span><?php echo $data->telepon_fk ?></span>
            </div>
            <center><a href="cari-nama.php?id=<?= $id ?>&act=fk_lengkap">
                <button class="btn btn-danger">Lihat Lengkap</button>
            </a></center>
    <?php
        }
    }
           
    ?> 
    <ul class="nav side-menu">
        <li><h5></h5></li>
    </div></div>
