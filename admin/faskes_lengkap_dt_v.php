<?php
include '../db.php';

     $hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu","Hari Libur");

                              $i = 0;
?>

<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> Jadwal Praktek</h2>
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
                     $query = mysqli_query($koneksi,"SELECT * FROM jadwal_praktek WHERE id_fk='".$id_fk."' ");
                     if($query){
                    ?>
                      <table class="table table-striped table-bordered" >
                        <thead>
                          <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($query)>0){
                              $i = 0;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                            <tr onClick="load_faskes('<?php echo $data['id_jdwl'] ?>')">
                              <td><?php echo $data['hari'] ?></td>
                              <td><?php echo $data['jam_buka']." - ".$data['jam_tutup']; ?></td>
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

