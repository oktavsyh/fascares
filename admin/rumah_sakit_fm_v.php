<?php
  include '../db.php';
  $title = 'Tambah';
  $button = '<button name="add" type="submit" title="Simpan Data" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</button>';

  $id = $_POST['id'];

  $query = mysqli_query($koneksi,"SELECT * FROM rumah_sakit WHERE id_rs='$id' ");
  
     $id_rs = false;
    $nama = false;
    $alamat = false;
    $kota=false;
    $notelp=false;
    $long = false;
    $lat = false;

  if(mysqli_num_rows($query)==1){
    while($r1=mysqli_fetch_array($query)){
    $title = "Ubah";
    $button = '<button name="update" title="Simpan perubahan data" data-loading-text="Menyimpan perubahan..." type="submit" class="btn btn-success crud-btn btn-sm xtooltip"><i class="fa fa-edit"></i> Simpan Perubahan</button> <button data-original-title="Hapus Gejala" type="submit" name="delete" class="btn btn-danger crud-btn btn-sm" data-loading-text="Menghapus..."><i class="fa fa-trash-o"></i> Hapus</button>';
    $id_rs = $r1['id_rs'];
    $kota=$r1['kota_rs'];
    $notelp=$r1['telepon_rs'];
    $nama = $r1['nama_rs'];
    $alamat = $r1['alamat_rs'];
    $long = $r1['longitude_rs'];
    $lat = $r1['latitude_rs'];
    }
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
                    <h2><i class="fa fa-bars"></i> <?php echo $title ?> Rumah Sakit</h2>
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
                    <form action="inc_rumah_sakit.php" method="post" enctype="multipart/form-data">
                    <div class="x_title">
                        <div class="form-group">
                            <strong>Nama Rumah Sakit :</strong><input name="nama_rs" value="<?php echo $nama ?>" type="text" class="form-control" placeholder="Nama Rumah Sakit">
                            <input name="id_rs" value="<?php echo $id_rs ?>" type="hidden" class="form-control">
                        </div>
                         <div class="form-group">
                            <strong>Kota :</strong>
                            <div class="row">
                                  <div class="col-md-6">
                                        <input type="radio" name="kota_rs" value="Bogor" <?php echo radioSelect($kota,"Bogor"); ?>>&nbsp;Bogor
                                  </div>
                                  <div class="col-md-6">
                                        <input type="radio" name="kota_rs" value="Kab Bogor" <?php echo radioSelect($kota,"Kab Bogor"); ?>>&nbsp;Kab Bogor
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Alamat :</strong><input name="alamat_rs" value="<?php echo $alamat ?>" type="text" class="form-control" placeholder="Alamat Rumah Sakit">
                        </div>
                        <div class="form-group">
                            <strong>No Telp :</strong><input name="notelp_rs" value="<?php echo $notelp ?>" type="text" class="form-control" placeholder="No telepon RS">
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