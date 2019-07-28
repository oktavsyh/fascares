<link href="assets/plugins/gritter/jquery.gritter.css " rel="stylesheet">
<style type="text/css">
    .gambar{
        width: 150px;
        height: 150px;
  display: block;
  margin-left: auto;
  margin-right: auto;

    }
</style>

<div id="wrapper">
<!-- Begin page content -->
 <div class="container">
         <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-wall" style="background-color: white;">
                    <img class="gambar" src="assets/images/hospital.png" alt="">
                    <form id="cmbsii_loginform" class="form-signin" action="inc_login.php" method="post">
                    Nama User
                    <input type="text" class="form-control" placeholder="Nama User" required autofocus name="txt_username" id="txt_username">
                    <br>
                    Kata Sandi
                    <input type="password" class="form-control" placeholder="Kata Sandi" required name="txt_password">
                    <button class="btn btn-lg btn-danger btn-block" type="submit">Masuk</button>
                    </form>
                </div>
                <div id="output"></div>
            </div>
        </div>
      </div>
</div>


<script src="assets/plugins/gritter/jquery.gritter.js"></script>