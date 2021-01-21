<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tb_kwitansi WHERE id_kwitansi ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kwitansi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-2">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan tanggal" value="<?= $data['tanggal']?>" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-3 col-xs-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3"  value="<?= $data['nik']?>" readonly>
                            </div>

                        </div>
                         <div class="form-group">
                            <label for="jumlah_pembayaran" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pembayaran" class="form-control" id="inputEmail3" placeholder="Inputkan jumlah pembayaran" value="<?= $data['jumlah_pembayaran']?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kwitansi</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kwitansi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kwitansi
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
    $tanggal=$_POST['tanggal'];
    $jumlah_pembayaran=$_POST['jumlah_pembayaran'];
    //buat sql
    $sql="UPDATE tb_kwitansi SET tanggal='$tanggal',nik='$nik',jumlah_pembayaran='$jumlah_pembayaran' WHERE id_kwitansi ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Kwitansi Error");
    if ($query){
        echo "<script>window.location.assign('?page=kwitansi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



