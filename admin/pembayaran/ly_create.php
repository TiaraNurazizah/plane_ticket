
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/dist/css/docs.min.css" rel="stylesheet">
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <title>E-TIKET</title>
</head>
<body id="page-top">
<?php
    session_start();
    if($_SESSION['level']==""){
        header("location:../index.php?pesan=gagal");
    }
    ?>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Tiket</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="../layoutt.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../konsumen/ly_konsumen.php">Konsumen</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pegawai/ly_pegawai.php">Pegawai</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../maskapai/ly_maskapai.php">Maskapai</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../tiket/ly_tiket.php">Tiket</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="ly_pembayaran.php">Pembayaran</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../transaksi/ly_transaksi.php">Transaksi</a>
            </li>
            
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
         <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <a class="nav-link" href="../logout.php" style="margin-left:1000px;">Logout</a>
                    
                    </ul>

                </nav>
                <!-- End of Topbar -->
                <?php
                include 'create.php';
                ?>
               
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Tiara Nurazizah-XII RPL 2</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
   

</body>
</html>