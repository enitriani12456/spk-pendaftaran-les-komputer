<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sistem Pendukung Keputusan Detail Data Kwitansi</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_kwitansi WHERE id_kwitansi ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nik</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pembayaran</td> <td>Rp. <?= number_format($data['jumlah_pembayaran']) ?></td>
                        </tr>
                    
                    </table>
                
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kwitansi&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Kwitansi </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

