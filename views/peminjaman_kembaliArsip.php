<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM kwitansi WHERE kwitansi ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Kembali Kwitansi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no" class="col-sm-3 control-label">Nomor </label>
                            <div class="col-sm-9">
								<input type="text" name="no" value="<?=$data['no']?>" class="form-control" id="inputEmail3" placeholder="Nomor" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="nama_siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="kwitansi" value="<?=$data['nama_siswa']?>" class="form-control" id="inputEmail3" placeholder="Nama Siswa" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="jumlah_pembayaran" class="col-sm-3 control-label">Jumlah Pembayaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumlah_pembayaran" value="<?=$data['jumlah_pembayaran']?>" class="form-control" id="inputEmail3" placeholder="jumlah pembayaran" readonly="true">
                            </div>
                        </div> 
						
						<div class="form-group">
                            <label for="tanda_tangan" class="col-sm-3 control-label">Tanda Tangan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanda_tangan" class="form-control" id="inputEmail3" placeholder="tanda_tangan">
                            </div>
                        </div> 
						
                       
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tglPinjam =$_POST['tglPinjam'];
		$potTgl = substr($tglPinjam,8,2);
		$potBln = substr($tglPinjam,5,2);
		$potThn = substr($tglPinjam,0,4);
	$tglKembali=$_POST['tglKembali'];
		$potTglKem = substr($tglKembali,8,2);
		$potBlnKem = substr($tglKembali,5,2);
		$potThnKem = substr($tglKembali,0,4);
	$lamapinjam = (($potThnKem - $potThn)*360)+(($potBlnKem - $potBln)*30)+($potTglKem - $potTgl);
    //buat sql
    $sql="UPDATE peminjaman SET tgl_kembali='$tglKembali', lama_pinjam='$lamapinjam' WHERE no_perkara='$nope'";
	$sqlArsip="UPDATE arsip SET status='Ada' WHERE no_perkara='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>