<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                         <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan Nik" minlength="16"  maxlength="16" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_siswa" class="form-control" id="inputEmail3" placeholder="Inputkan nama_siswa" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan alamat" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="no_hp" class="col-sm-3 control-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Inputkan No Hp" required>
                            </div>
                        </div>
                        <!--Status-->

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenis_kelamin" class="form-control" id="inputEmail3">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir jenis_kelamin-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=siswa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Siswa
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nik=$_POST['nik'];
  $nama_siswa=$_POST['nama_siswa'];
  $alamat=$_POST['alamat'];
  $no_hp=$_POST['no_hp'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  
    //buat sql
    $sql="INSERT INTO tb_siswa VALUES ('','$nik','$nama_siswa','$alamat','$no_hp','$jenis_kelamin')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan data_siswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=siswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
