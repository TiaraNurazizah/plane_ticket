<?php
include '../../koneksi.php'
?>

<?php
$koneksi->query("DELETE  FROM ticket WHERE id='$_GET[id]'");
echo "<script>alert('Data tiket berhasil di Hapus')</script>";
echo "<script>location ='ly_tiket.php';</script>";
?>