<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_siswa WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Pendukung Keputusan Pendaftaran Les Komputer </h2>
                        <h4>Jalan Sengon Sari Dsn. 1, Kecamatan Aek Kuasan <br>  Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SISWA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td width="200">Nik</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td> <td><?= $data['nama_siswa'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>No Hp</td> <td><?= $data['no_hp'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Hukum, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>