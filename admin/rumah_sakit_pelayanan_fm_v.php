<?php
  include '../db.php';
  $title = 'Tambah';
  $button = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysqli_query($koneksi,"SELECT * FROM jenis_pelayanan WHERE id_plyn='$id' ");
  
     $id_plyn = false;
     $plyn=false;
     $kelas=false;

  if(mysqli_num_rows($query)==1){
    while($r1=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_plyn = $r1['id_plyn'];
    $plyn=$r1['nama_plyn'];
     $id_rs=$r1['id_rs'];
    }
  }


?>
<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> <?php echo $title ?> Pelayanan</h2>
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
                    <form action="inc_pelayanan.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                         <input type="text" name="idplyn" value="<?= $id_plyn ?>" hidden>
                          <input type="text" name="idrs" value="<?= $id_rs ?>" hidden>
                 
                              <div class="form-group">
                                  <strong>Pelayanan:</strong><input name="nama_plyn" value="<?php echo $plyn ?>" type="text" class="form-control" placeholder="Nama Pelayanan">
                              </div>
                      
                    </div>
                    <?php
                      echo $button;
                    ?>
                    </form>
                    </div>

                  </div>
                  
                </div>