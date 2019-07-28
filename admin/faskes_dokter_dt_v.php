<?php
include '../db.php';

     $hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu","Hari Libur");

                              $i = 0;
?>

<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> Nama Dokter</h2>
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

                    <div class="" role="tabpanel" data-example-id="togglable-tabs" >
                    <?php
                     include '../db.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM dokter WHERE id_fk='".$id_fk."' ");
                     if($query){
                    ?>
                      <table class="table table-striped table-bordered" id="kab" >
                        <thead>
                          <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($query)>0){
                              $i = 0;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                            <tr onClick="load_faskes_dokter('<?php echo $data['id_dktr'] ?>')">
                              <td><?php echo $data['nama_dktr'] ?></td>
                              <td><?php echo $data['jk_dktr'] ?></td>
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
                    </div>

                  </div>
                </div>

