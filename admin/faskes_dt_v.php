<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> Data Faskes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <?php
                     include '../db.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM faskes ORDER BY nama_fk asc");
                     if($query){
                    ?>
                      <table class="table table-striped table-bordered" id="kab">
                        <thead>
                          <tr>
                            <th>Nama Faskes</th>
                            <th>Kategori</th>
                            <th>Kota</th>
                            <th style="width: 30%;">Alamat</th>
                            <th style="width: 10%;">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($query)>0){
                              $i = 0;
                              while($data=mysqli_fetch_array($query)){
                                  $i++;
                          ?>
                            <tr onClick="load_faskes('<?php echo $data['id_fk'] ?>')">
                              <td><?php echo $data['nama_fk'] ?></td>
                              <td><?php echo $data['kategori_fk']?></td>
                              <td><?php echo $data['kota_fk']?></td>
                              <td><?php echo $data['alamat_fk'];?></td>
                              <td style="padding:0px; padding-top:2px; padding-left:10px;"><a href="index.php?id=<?= $data['id_fk'] ?>&act=faskes_lengkap"><button class="btn btn-primary btn-sm"> Lihat</button></a></td>
                            </tr>
                        <?php
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
                    </div>

                  </div>
                </div>

