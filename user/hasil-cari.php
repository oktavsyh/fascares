

                    <?php
                     include '../db.php';

                       $kategori=$_POST['kategori'];
                       $cari=$_POST['cari'];

                      if ($_POST['kategori']=="Rumah Sakit"){
                     $query = mysqli_query($koneksi,"SELECT * FROM rumah_sakit WHERE nama_rs LIKE '%".$_POST['cari']."%' ");
                     $jns="rs";
                     }
                     else{
                     $query = mysqli_query($koneksi,"SELECT * FROM faskes WHERE nama_fk LIKE '%".$_POST['cari']."%' 
                      AND kategori_fk='".$_POST['kategori']."' ");
                     $jns="fk";
                     }
                     if($query){
                    ?>
                        <center>
                          <caption>Hasil pencarian <?= $kategori ?> <?= $cari ?> </caption>
                        </center>
                      <table class="table table-striped table-bordered" id="kabs" >
                        <thead>
                          <tr>
                            <th>Nama Faskes</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($query)>0){
                              $i = 0;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                              <tr>
                              <td><?php echo $data['nama_'.$jns] ?></td>
                              <td><?php echo $data['kota_'.$jns] ?></td>
                              <td><?php echo $data['alamat_'.$jns] ?></td>
                              <td><?php echo $data['telepon_'.$jns] ?></td>
                              <?php
                                if (isset($data['id_rs'])){
                              ?>
                              <td style="padding:0px; padding-top:2px; padding-left:10px;"><a href="cari-nama.php?id=<?= $data['id_rs'] ?>&act=rs_lengkap"><button class="btn btn-primary btn-md"> Lihat</button></a></td>
                            <?php
                                }
                                elseif (isset($data['id_fk'])) {
                                  ?>
                                   <td style="padding:0px; padding-top:2px; padding-left:10px;"><a href="cari-nama.php?id=<?= $data['id_fk'] ?>&act=fk_lengkap"><button class="btn btn-primary btn-md"> Lihat</button></a></td>
                                  <?php
                                }
                            ?>
                              </tr>
                        <?php

                                  $i++;
                            }
                          }
                        ?>
                        </tbody>
                      </table>
                      <?php   
                      }else {
                      ?>
                      -- Tidak ada Konten tefkedia --
                      <?php
                      }
                      ?>

