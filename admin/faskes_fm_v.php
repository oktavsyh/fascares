<?php
  include '../db.php';
  $title = 'Tambah';
  $button = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysqli_query($koneksi,"SELECT * FROM faskes WHERE id_fk='$id' ");
  
     $id_fk = false;
    $nama = false;
    $alamat = false;
    $kategori=false;
    $kota=false;
    $notelp=false;
    $long = false;
    $lat = false;

  if(mysqli_num_rows($query)==1){
    while($r1=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_fk = $r1['id_fk'];
    $nama = $r1['nama_fk'];
    $alamat = $r1['alamat_fk'];
    $notelp= $r1['telepon_fk'];
    $kota=$r1['kota_fk'];
    $kategori=$r1['kategori_fk'];
    $long = $r1['longitude_fk'];
    $lat = $r1['latitude_fk'];
    }
  }

  function optionSelect($kategori,$value){
      if ($kategori==$value)
        return "selected";
      else
        return "";
  }
  function radioSelect($x, $y){
    if ($x == $y)
      return "checked";
    else
      return "";
  }

?>
<div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bafk"></i> <?php echo $title ?> Faskes</h2>
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
                    <form action="inc_faskes.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                        <div class="form-group">
                            <strong>Nama Faskes :</strong><input name="nama_fk" value="<?php echo $nama ?>" type="text" class="form-control" placeholder="Nama Faskes">
                            <input name="id_fk" value="<?php echo $id_fk ?>" type="hidden" class="form-control">
                        </div>

                        <div class="form-group">
                            <strong>Kategori faskes :</strong>
                            <select name="kategori_fk" class="form-control form-control-sm">
                              <option></option>
                              <option value="Puskesmas" <?php echo optionSelect($kategori,"Puskesmas"); ?>>Puskesmas</option>
                              <option value="Dokter Praktik Perorangan" <?php echo optionSelect($kategori,"Dokter Praktik Perorangan"); ?>>Dokter Praktik Perorangan</option>
                              <option value="Dokter Gigi" <?php echo optionSelect($kategori,"Dokter Gigi"); ?>>Dokter Gigi</option>
                              <option value="Klinik Utama" <?php echo optionSelect($kategori,"Klinik Utama"); ?>>Klinik Utama</option>
                              <option value="Klinik Pratama" <?php echo optionSelect($kategori,"Klinik Pratama"); ?>>Klinik Pratama</option>
                              <option value="Apotek" <?php echo optionSelect($kategori,"Apotek"); ?>>Apotek</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Kota :</strong>
                            <div class="row">
                                  <div class="col-md-6">
                                        <input type="radio" name="kota_fk" value="Bogor" <?php echo radioSelect($kota,"Bogor"); ?>>&nbsp;Bogor
                                  </div>
                                  <div class="col-md-6">
                                        <input type="radio" name="kota_fk" value="Kab Bogor" <?php echo radioSelect($kota,"Kab Bogor"); ?>>&nbsp;Kab Bogor
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Alamat :</strong>
                              <textarea class="form-control" col="30" row="30" placeholder="Alamat" placeholder="Alamat faskes" name="alamat_fk"><?php echo $alamat ?></textarea>
                        </div>
                        <div class="form-group">
                            <strong>No Telp :</strong><input name="notelp_fk" value="<?php echo $notelp ?>" type="text" class="form-control" placeholder="No telepon Faskes">
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6 col-sm-6">    
                              <div class="form-group">
                                  <strong>Longitude :</strong><input name="longitude_txt" value="<?php echo $long ?>" type="text" class="form-control" placeholder="Longitude">
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                  <strong>Latitude :</strong><input name="latitude_txt" value="<?php echo $lat ?>" type="text" class="form-control" placeholder="Latitude">
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