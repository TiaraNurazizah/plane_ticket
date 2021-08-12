<?php

define('_MPDF_PATH','mpdf/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');

include '../koneksi.php';
 
$nama_dokumen='hasil-ekspor';
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css"> 
    <link rel="stylesheet" href="frontend/styles/main.css"> 
</head>
<body>
<br>
  <br>
    <h2><center>Download Tiket<center></h2>
    <br>
    <div class="container">
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <?php $nomor = 1;?>
                    <th>No Penjualan</th>
                    <th>No Customer</th>
                    <th>Nama Lengkap</th>
                    <th>Destinasi</th>
                    <th>Jumlah Penumpang</th>
                    <th>Maskapai</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Pembayaran</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $tampil_data = $koneksi->query("SELECT * FROM purchase order by id desc");?>
                <?php while ($data = $tampil_data->fetch_assoc()) {?>
                    <tr>
                        <td><?=$nomor++;?></td>
                        <td><?=$data['kode_customer']?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['destination']?></td>
                        <td><?=$data['jumlah']?></td>
                        <td><?=$data['maskapai_kelas']?></td>
                        <td><?=$data['tanggal']?></td>
                        <td><?=$data['jam']?></td>
                        <td><?=$data['pembayaran']?></td>
                        <td><?=$data['harga']?></td>
                        <td><?=$data['total']?></td>
                        </tr>

                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
 
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("".$nama_dokumen.".pdf" ,'D');
$db1->close();
?>