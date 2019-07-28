<?php
  include '../db.php';
  $id_fk=$_GET['id'];
  $sql="SELECT * FROM faskes where id_fk='$id_fk'";
  $hsl=mysqli_query($koneksi,$sql);
  while ($rcrd=mysqli_fetch_assoc($hsl)) {
    $nama_fk=$rcrd['nama_fk'];
    $kategori_fk=$rcrd['kategori_fk'];
    $kota_fk=$rcrd['kota_fk'];
    $alamat_fk=$rcrd['alamat_fk'];
    $telepon_fk=$rcrd['telepon_fk'];
  }
?>
 <div class="row" >
    <div class="col-md-7 kotaks">
        <div class="w100 title-lengkap">
          <h5 style="color:white"><?php echo $nama_fk; ?></h5>
        </div>
      <div class="w100">
      <img src="../assets/images/rs-ilus.jpg." class="img-fluid" alt="Responsive image">
      </div>
      <div class="row centered">
              <div class="col-md-3 kotak">
                <i class='fas fa-hospital'></i>
                <h6><?= $kategori_fk ?></h6>
              </div>
              <div class="col-md-2 kotak">
                <i class='fas fa-city'></i>
                <p><?= $kota_fk?></p>
              </div>
              <div class="col-md-3 kotak">
                <i class='fas fa-address-card'></i>
                <p><?= $alamat_fk ?></p>
              </div>
              <div class="col-md-3 kotak">
                <i class='fas fa-phone'></i>
                <p><?= $telepon_fk ?></p>
              </div>      
      </div>
    </div>
    <div class="col-md-4 kotaks"  >
        <div class="w100 title-lengkap">
          <h5 style="color:white" >Jadwal Praktek</h5>
        </div>
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM jadwal_praktek where id_fk='".$id_fk."' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?= $data['hari'] ?></td>
                              <td><?php echo $data['jam_buka']." - ".$data["jam_tutup"] ?></td>
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


 <div class="row m20" id="accordions">
    <div class="col-md-6 kotaks"  >
        <div class="w100 title-lengkap" id="headingtwo">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h5 style="color:white" >Nama Dokter</h5>

        </div>
        <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#accordions">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM dokter where id_fk='".$id_fk. "' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?= $data['nama_dktr'] ?></td>
                              <td><?php echo $data['jk_dktr'] ?></td>
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

    <div class="col-md-5 kotaks"  >
        <div class="w100 title-lengkap" id="headingtwo">
    <div class="float-right">      
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
         <i class='fas fa-chevron-up putih'></i>
        </button>
    </div>
          <h5 style="color:white" >Jumlah Pegawai</h5>

        </div>
        <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#accordions">
          
         <table class="table table-striped" id="kabs">
                        <thead>
                          <tr>
                            <th>Profesi</th>
                            <th>Nama</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          $sql="SELECT * FROM jumlah_pegawai where id_fk='".$id_fk. "' ";
                          $query=mysqli_query($koneksi,$sql);
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?=$data['profesi_pgw']?></td>
                              <td><?php echo $data['jumlah_pgw'] ?></td>
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

