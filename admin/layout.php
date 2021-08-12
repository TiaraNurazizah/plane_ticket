<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css"> 
    <title>E-Tiket</title>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['level']=="admin"){
        header("location:../index.php?pesan=gagal");
    }
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>E-Tiket</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="konsumen/konsumen.php">Konsumen</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pegawai/pegawai.php">Pegawai</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="maskapai/maskapai.php">Maskapai</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="tujuan/tujuan.php">Tujuan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="tiket/tiket.php">Tiket</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pembayaran/pembayaran.php">Pembayaran</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="transaksi/transaksi.php">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="margin-left:500px;">Logout</a>
                </li>
            </div>
        </div>
    </nav>
    <br>
    <br>


    <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>
</body>
</html>