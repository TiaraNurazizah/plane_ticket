<?php 
include '../../koneksi.php' 
?>

<?php 
$koneksi->query("DELETE  FROM plane WHERE id='$_GET[id]'");
 echo"<script>alert('Data maskapai berhasil di Hapus')</script>" ;
 echo "<script>location ='ly_maskapai.php';</script>";  
 ?>