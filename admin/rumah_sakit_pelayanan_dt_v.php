<?php
include '../db.php';

?>

<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> Jenis Pelayanan Faskes</h2>
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
                     $query = mysqli_query($koneksi,"SELECT * FROM jenis_pelayanan WHERE id_rs='".$id_rs."' ");
                     if($query){
                    ?>
                      <table class="table table-striped table-bordered" id="kabss">
                        <thead>
                          <tr>
                            <th style="width: 5%;">No</th>
                            <th>Nama Pelayanan</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          if(mysqli_num_rows($query)>0){
                              $i = 1;
                              while($data=mysqli_fetch_array($query)){
                          ?>
                            <tr onClick="load_pelayanan('<?php echo $data['id_plyn'] ?>')">
                              <td><?php echo $i; ?></td>
                              <td><?php echo $data['nama_plyn'] ?></td>
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

