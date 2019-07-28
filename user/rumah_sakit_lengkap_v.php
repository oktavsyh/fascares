<?php
  include '../db.php';
  $id_rs=$_GET['id'];
  $sql="SELECT * FROM rumah_sakit where id_rs='$id_rs'";
  $hsl=mysqli_query($koneksi,$sql);
  while ($rcrd=mysqli_fetch_assoc($hsl)) {
    $nama_rs=$rcrd['nama_rs'];
    $kota_rs=$rcrd['kota_rs'];
    $alamat_rs=$rcrd['alamat_rs'];
    $telepon_rs=$rcrd['telepon_rs'];
  }
?>
 <div class="row" >
    <div class="col-md-7 kotaks">
        <div class="w100 title-lengkap">
          <h5 style="color:white"><?php echo $nama_rs; ?></h5>
        </div>
      <div class="w100">
      <img src="../assets/images/rs-ilus.jpg." class="img-fluid" alt="Responsive image">
      </div>
      <div class="row centered">
              <div class="col-md-3 kotak">
                <i class='fas fa-hospital'></i>
                <h6>Rumah Sakit</h6>
              </div>
              <div class="col-md-2 kotak">
                <i class='fas fa-city'></i>
                <p><?= $kota_rs?></p>
              </div>
              <div class="col-md-3 kotak">
                <i class='fas fa-address-card'></i>
                <p><?= $alamat_rs ?></p>
              </div>
              <div class="col-md-3 kotak">
                <i class='fas fa-phone'></i>
                <p><?= $telepon_rs ?></p>
              </div>      
      </div>
    </div>
    <div class="col-md-4 kotaks"  >
        <div class="w100 title-lengkap">
          <h5 style="color:white" >Sarana Faskes</h5>
        </div>
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th width="10">No</th>
                            <th>Nama Sarana</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM sarana_faskes where id_rs='".$id_rs."' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?=$i?></td>
                              <td><?php echo $data['nama_srn'] ?></td>
                             </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
    </div>

  </div>

 <div class="row m20" id="accordion">
    <div class="col-md-4 kotaks"  >
        <div class="w100 title-lengkap" id="headingOne">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h6 style="color:white" >Ruangan VVIP/VIP/UTAMA</h6>

        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>Kelas</th>
                            <th>Nama Ruangan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM tempat_tidur where id_rs='".$id_rs. "' AND (kelas_tmpt='VVIP' or 
                            kelas_tmpt='VIP' or kelas_tmpt='UTAMA') ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?=$data['kelas_tmpt']?></td>
                              <td><?php echo $data['nama_tmpt'] ?></td>
                             </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
        </div>
    </div>

    <div class="col-md-4 kotaks"  >
        <div class="w100 title-lengkap" id="headingOne">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h5 style="color:white" >Ruangan Kelas 1</h5>

        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM tempat_tidur where id_rs='".$id_rs. "' AND kelas_tmpt='Kelas I' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?= $i;?></td>
                              <td><?php echo $data['nama_tmpt'] ?></td>
                             </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
        </div>
    </div>
    <div class="col-md-3 kotaks"  >
        <div class="w100 title-lengkap" id="headingOne">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h6 style="color:white" >Ruangan Kelas 2</h6>

        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM tempat_tidur where id_rs='".$id_rs. "' AND kelas_tmpt='Kelas II'";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?=$i;?></td>
                              <td><?php echo $data['nama_tmpt'] ?></td>
                             </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
        </div>
    </div>

  </div>

 <div class="row m20" id="accordions">
    <div class="col-md-7 kotaks"  >
        <div class="w100 title-lengkap" id="headingtwo">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h5 style="color:white" >Jenis Pelayanan</h5>

        </div>
        <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#accordions">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th width="5">No</th>
                            <th>Nama</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM jenis_pelayanan where id_rs='".$id_rs. "' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?=$i?></td>
                              <td><?php echo $data['nama_plyn'] ?></td>
                             </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
        </div>
    </div>

    <div class="col-md-4 kotaks"  >
        <div class="w100 title-lengkap" id="headingtwo">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h5 style="color:white" >Ruangan Kelas 3</h5>

        </div>
        <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#accordions">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM tempat_tidur where id_rs='".$id_rs. "' AND kelas_tmpt='Kelas III' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?=$i;?></td>
                              <td><?php echo $data['nama_tmpt'] ?></td>
                             </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
        </div>
    </div>

  </div>

