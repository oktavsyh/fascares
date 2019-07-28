<?php
  include '../db.php';
  $title = 'Tambah';
  $button1 = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysqli_query($koneksi,"SELECT * FROM jumlah_pegawai WHERE id_jml='$id' ");
  

    $id_jml = false;
     $profesi=false;
     $jumlah=false;

  if(mysqli_num_rows($query)==1){
    while($r2=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button1 = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_jml = $r2['id_jml'];
     $profesi=$r2['profesi_pgw'];
     $jumlah=$r2['jumlah_pgw'];
     $id_fk=$r2['id_fk'];
    }
  }

?>
<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> <?php echo $title ?> Pegawai</h2>
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
                    <form action="inc_pegawai.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <input type="text" name="idfk" value="<?= $id_fk ?>" hidden >
                            <input type="text" name="idjml" value="<?= $id?>" hidden >
                              <div class="form-group">
                                  <strong>Profesi :</strong><input name="profesi" value="<?php echo $profesi ?>" type="text" class="form-control" placeholder="Profesi">
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                              <strong>Jumlah :</strong><input name="jumlah" type="number" class="form-control" placeholder="Jumlah Pegawai" value="<?= $jumlah ?>">
                              </div>
                          </div>
                        </div>
                      
                    </div>
                    <?php
                      echo $button1;
                    ?>
                    </form>
                    </div>

                  </div>
                </div>