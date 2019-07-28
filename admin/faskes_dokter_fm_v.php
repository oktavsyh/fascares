<?php
  include '../db.php';
  $title = 'Tambah';
  $button1 = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];


  function optionSelects($kategori,$value){
      if ($kategori==$value)
        return "selected";
      else
        return "";
  }

  $query = mysqli_query($koneksi,"SELECT * FROM dokter WHERE id_dktr='$id' ");
  

    $id_dktr = false;
     $nama_dktr=false;
     $jk_dktr=false;

  if(mysqli_num_rows($query)==1){
    while($r2=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button1 = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_dktr = $r2['id_dktr'];
     $nama_dktr=$r2['nama_dktr'];
     $jk_dktr=$r2['jk_dktr'];
     $id_fk=$r2['id_fk'];
    }
  }

?>
<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> <?php echo $title ?> Dokter</h2>
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
                    <form action="inc_dokter.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <input type="text" name="idfk" value="<?= $id_fk ?>" hidden >
                            <input type="text" name="iddktr" value="<?= $id?>" hidden >
                              <div class="form-group">
                                  <strong>Nama Dokter :</strong><input name="nama_dktr" value="<?php echo $nama_dktr ?>" type="text" class="form-control" placeholder="Nama Dokter">
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="form-group">

                                  <strong>Jenis Kelamin :</strong>
                                  <select name="jk_dktr" class="form-control" >
                                    <option></option>
                                    <option value="Laki-Laki" <?php echo optionSelects($jk_dktr,"Laki-Laki") ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?php echo optionSelects($jk_dktr,"Perempuan") ?>>Perempuan</option>
                                  </select>
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