<?php
  include '../db.php';
  $title = 'Tambah';
  $button = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysqli_query($koneksi,"SELECT * FROM tempat_tidur WHERE id_tmpt='$id' ");
  
     $id_tmpt = false;
     $tmpt=false;
     $kelas=false;

  if(mysqli_num_rows($query)==1){
    while($r1=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_tmpt = $r1['id_tmpt'];
    $tmpt=$r1['nama_tmpt'];
    $kelas=$r1['kelas_tmpt'];
     $id_rs=$r1['id_rs'];
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
                    <h2><i class="fa fa-bafk"></i> <?php echo $title ?> Ruangan</h2>
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
                    <form action="inc_tempat.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                         <input type="text" name="idtmpt" value="<?= $id_tmpt ?>" hidden>
                          <input type="text" name="idrs" value="<?= $id_rs ?>" hidden>
                            
                     <div class="form-group">
                            <strong>Kelas :</strong>
                            <select name="kelas_tmpt" class="form-control form-control-sm">
                              <option></option>
                              <option value="VVIP" <?php echo optionSelect($kelas,"VVIP"); ?>>VVIP</option>
                              <option value="VIP" <?php echo optionSelect($kelas,"VIP"); ?>>VIP</option>
                              <option value="Utama" <?php echo optionSelect($kelas,"Utama"); ?>>Utama</option>
                              <option value="Kelas I" <?php echo optionSelect($kelas,"Kelas I"); ?>>Kelas I</option>
                              <option value="Kelas II" <?php echo optionSelect($kelas,"Kelas II"); ?>>Kelas II</option>
                              <option value="Kelas III" <?php echo optionSelect($kelas,"Kelas III"); ?>>Kelas III</option>
                              <option value="ICU" <?php echo optionSelect($kelas,"ICU"); ?>>ICU</option>
                              <option value="IGD" <?php echo optionSelect($kelas,"IGD"); ?>>IGD</option>
                              <option value="UGD" <?php echo optionSelect($kelas,"UGD"); ?>>UGD</option>
                            </select>
                        </div>
                              <div class="form-group">
                                  <strong>Nama Ruang :</strong><input name="nama_tmpt" value="<?php echo $tmpt ?>" type="text" class="form-control" placeholder="Nama Ruang">
                              </div>
                      
                    </div>
                    <?php
                      echo $button;
                    ?>
                    </form>
                    </div>

                  </div>
                  
                </div>