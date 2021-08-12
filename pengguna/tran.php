<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css"> 
    <link rel="stylesheet" href="frontend/styles/main.css"> 

    <title>E-TIKET</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <img src="frontend/img/planelogo.png" width="70" height="70" alt="logo">
      E-TIKET</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="tentang.php">Daftar Pesawat</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="ly_beli.php">Beli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/logout.php">Logout</a>
        </li>
      </ul>
      </div>
    </div>
    </nav>
    
    
    <!--Bagian Header-->
    <header class="masthead">
    <div class="container">
      <div class="intro-text">
      <div class="intro-lead-in">Penjualan Tiket Pesawat</div>
      <div class="intro-heading text-uppercase">E-TIKET</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="ly_beli.php">Beli Sekarang</a>
      </div>
    </div>
  </header>
  <br>
  <br>
    <h2><center>Data Tiket<center></h2>
    <br>
    <div class="container">
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
                    <!--<th>Aksi</th>-->
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
                        <!--<td>
                            <a href="../transaksi/delete.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-primary btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?'\)">Delete</a>
                        </td>-->
                        </tr>

                <?php }?>
            </tbody>
        </table>
    </div>



    <!--Footer-->
    <footer class="footer">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12">
                <span class="copyright">Copyright &copy; Tiara Nurazizah XII RPL 2</span>
            </div>
            </div>
        </div>
    </footer>

        

<script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>  
<script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>

<!-- script lainnya -->
<script src="frontend/scripts/main.js"></script>
</body>
</html>






