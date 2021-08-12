<?php 
include '../../koneksi.php' 
?>

<?php 
$koneksi->query("DELETE  FROM admin WHERE id='$_GET[id]'");
 echo"<script>alert('Data user berhasil di Hapus')</script>" ;
 echo "<script>location ='ly_pegawai.php';</script>";  
 ?>