<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Kwitansi</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>Tanggal</th><th>Nik</th><th>Nama Siswa</th><th>Jumlah Pembayaran</th><th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_kwitansi tk inner join tb_siswa ts on tk.nik=ts.nik";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['tanggal'] ?></td>
                                    <td><?= $data['nik'] ?></td>
                                    <td><?= $data['nama_siswa'] ?></td>
                                    <td>Rp. <?= number_format($data['jumlah_pembayaran']) ?></td>
                                    <td>
                                        <a href="?page=kwitansi&actions=detail&id=<?= $data['id_kwitansi'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=kwitansi&actions=edit&id=<?= $data['id_kwitansi'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        
                                        <a href="?page=kwitansi&actions=delete&id=<?= $data['id_kwitansi'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin menghapus data pembayaran A.N <?= $data['nama_siswa']?>');">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=kwitansi&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data Kwitansi

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

