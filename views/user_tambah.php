<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data User</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                         <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Inputkan Username" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="paswd" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="paswd" class="form-control" id="inputEmail3" placeholder="Inputkan Password" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="Example@email.com" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama User</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                        
                        <!--Status-->

                        <div class="form-group">
                            <label for="level" class="col-sm-3 control-label">Level User</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="level" class="form-control" id="inputEmail3">
                                    <option value="1">Admin</option>
                                    <option value="2">Pelanggan</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir jenis_kelamin-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data User</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data User
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $username=$_POST['username'];
  $paswd=$_POST['paswd'];
  $email=$_POST['email'];
  $nama=$_POST['nama'];
  $level=$_POST['level'];
  if ($level==1) {
      $ket='Staf Administrasi';
  }else{
    $ket='Pelanggan';
  }
  
    //buat sql
    $sql="INSERT INTO user VALUES ('','$username','$paswd','$email','$nama','$level','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan data_siswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
