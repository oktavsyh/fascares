<?php
  include '../db.php';
  $title = 'Tambah';
  $button = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysqli_query($koneksi,"SELECT * FROM jadwal_praktek WHERE id_jdwl='$id' ");
  
     $id_jwdl = false;
     $hari=false;
     $jam_buka=false;
     $jam_tutup=false;

  if(mysqli_num_rows($query)==1){
    while($r1=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_jdwl = $r1['id_jdwl'];
     $hari=$r1['hari'];
     $jam_buka=$r1['jam_buka'];
     $jam_tutup=$r1['jam_tutup'];
     $id_fk=$r1['id_fk'];
    }
  }

  function optionSelect($kategori,$value){
      if ($kategori==$value)
        return "selected";
      else
        return "";
  }

?>
<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> <?php echo $title ?> Jadwal</h2>
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
                    <form action="inc_hari.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                     <div class="form-group">
                            <strong>Hari :</strong>
                            <select name="hari" class="form-control form-control-sm">
                              <option></option>
                              <option value="Senin" <?php echo optionSelect($hari,"Senin"); ?>>Senin</option>
                              <option value="Selasa" <?php echo optionSelect($hari,"Selasa"); ?>>Selasa</option>
                              <option value="Rabu" <?php echo optionSelect($hari,"Rabu"); ?>>Rabu</option>
                              <option value="Kamis" <?php echo optionSelect($hari,"Kamis"); ?>>Kamis</option>
                              <option value="Jumat" <?php echo optionSelect($hari,"Jumat"); ?>>Jumat</option>
                              <option value="Sabtu" <?php echo optionSelect($hari,"Sabtu"); ?>>Sabtu</option>
                              <option value="Minggu" <?php echo optionSelect($hari,"Minggu"); ?>>Minggu</option>
                              <option value="Hari Libur" <?php echo optionSelect($hari,"Hari Libur"); ?>>Hari Libur</option>
                            </select>
                        </div>
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <input type="text" name="idjdwl" value="<?= $id_jdwl ?>" hidden>
                            <input type="text" name="idfk" value="<?= $id_fk?>" hidden>
                              <div class="form-group">
                                  <strong>Jam Buka :</strong><input name="jam_buka" value="<?php echo $jam_buka ?>" type="text" class="form-control" placeholder="Jam Buka">
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                  <strong>Jam Tutup :</strong><input name="jam_tutup" value="<?php echo $jam_tutup ?>" type="text" class="form-control" placeholder="Jam tutup">
                              </div>
                          </div>
                        </div>
                      
                    </div>
                    <?php
                      echo $button;
                    ?>
                    </form>
                    </div>

                  </div>
                </div>