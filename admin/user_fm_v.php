<?php
  include '../db.php';
  $title = 'Tambah';
  $button = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysql_query("SELECT * FROM tb_user WHERE username='$id' ");

  $user =false;
  $nm = false;

  if(mysql_num_rows($query)==1){
    while($r1=mysql_fetch_array($query)){
    $title = "Ubah";
    $button = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $user = $r1['username'];
    $nm = $r1['nama'];
    }
  }

?>
<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> <?php echo $title ?> User</h2>
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
                    <form action="inc_user.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                        <div class="form-group">
                            <strong>Nama Lengkap :</strong><input name="nm_txt" value="<?php echo $nm ?>" type="text" class="form-control" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <strong>Username :</strong><input name="usr_txt" value="<?php echo $user ?>" type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <strong>Password :</strong><input name="pw_txt" type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <?php
                      echo $button;
                    ?>
                    </form>
                    </div>

                  </div>
                </div>