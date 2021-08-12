<?php
include '../../koneksi.php'
?>

<?php
$koneksi->query("DELETE FROM purchase WHERE id='$_GET[id]'");
echo "<script>alert('Data Pembelian berhasil di Hapus')</script>";
echo "<script>location ='ly_transaksi.php';</script>";
?>