<?php 
include '../../koneksi.php' 
?>

<?php 
$koneksi->query("DELETE  FROM payment WHERE id='$_GET[id]'");
 echo"<script>alert('Data pembayaran berhasil di Hapus')</script>" ;
 echo "<script>location ='ly_pembayaran.php';</script>";  
 ?>