<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Data User</h2>
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
                     $query = mysql_query("SELECT * FROM tb_user ORDER BY nama asc");
                     if($query){
                    ?>
                      <table class="table table-striped table-bordered" id="usr">
                        <thead>
                          <tr>
                            <th width="5%">#</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Level User</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                          if(mysql_num_rows($query)>0){
                              $i = 0;
                              while($data=mysql_fetch_array($query)){
                                  $i++;
                          ?>
                            <tr onClick="load_user('<?php echo $data['username'] ?>')">
                              <td><?php echo $i ?></td>
                              <td><?php echo $data['nama'] ?></td>
                              <td><?php echo $data['username'] ?></td>
                              <td><?php echo $data['level'] ?></td>
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
                      -- Tidak ada Konten tersedia --
                      <?php
                      }
                      ?>
                    </div>

                  </div>
                </div>

